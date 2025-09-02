<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Category;
use App\Models\RentalPrice;
use App\Models\UpsBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display the dashboard with statistics.
     */
    public function index()
    {
        // Basic counts
        $totalPosts = Post::count();
        $totalProducts = Product::count();
        $totalCategories = Category::count();
        $totalUpsBrands = UpsBrand::count();
        $totalRentalPrices = RentalPrice::count();

        // Posts statistics
        $publishedPosts = Post::where('status', 'published')->count();
        $draftPosts = Post::where('status', 'draft')->count();
        $recentPosts = Post::where('created_at', '>=', Carbon::now()->subDays(7))->count();

        // Products statistics
        $inStockProducts = Product::where('stock', '>', 0)->count();
        $outOfStockProducts = Product::where('stock', '=', 0)->count();
        $lowStockProducts = Product::where('stock', '>', 0)->where('stock', '<=', 5)->count();

        // Categories statistics
        $activeCategories = Category::where('is_active', true)->count();
        $inactiveCategories = Category::where('is_active', false)->count();

        // Products by category (for chart)
        $productsByCategory = Category::withCount('products')
            ->having('products_count', '>', 0)
            ->get()
            ->map(function ($category) {
                return [
                    'name' => $category->name,
                    'count' => $category->products_count
                ];
            });

        // Recent activity (last 30 days)
        $recentActivity = [
            'posts_last_month' => Post::where('created_at', '>=', Carbon::now()->subDays(30))->count(),
            'products_last_month' => Product::where('created_at', '>=', Carbon::now()->subDays(30))->count(),
            'categories_last_month' => Category::where('created_at', '>=', Carbon::now()->subDays(30))->count(),
        ];

        // Monthly posts trend (last 6 months)
        $monthlyPosts = collect();
            for ($i = 5; $i >= 0; $i--) {
                $date = Carbon::now()->subMonths($i);
                $count = Post::whereYear('created_at', $date->year)
                            ->whereMonth('created_at', $date->month)
                            ->count();
                $monthlyPosts->push([
                    'month' => $date->format('M Y'),
                    'count' => $count
                ]);
        }

        // Stock status distribution
        $stockStatus = [
            'in_stock' => $inStockProducts,
            'low_stock' => $lowStockProducts,
            'out_of_stock' => $outOfStockProducts
        ];

        // Top products by stock
        $topProducts = Product::with('category')
            ->orderBy('stock', 'desc')
            ->take(5)
            ->get();

        // Recent posts
        $recentPostsList = Post::with('author')
            ->latest()
            ->take(5)
            ->get();

        // Rental prices summary
        $rentalPricesSummary = [
            'daily' => RentalPrice::where('duration', 'daily')->count(),
            'weekly' => RentalPrice::where('duration', 'weekly')->count(),
            'monthly' => RentalPrice::where('duration', 'monthly')->count(),
            'yearly' => RentalPrice::where('duration', 'yearly')->count(),
        ];

        // Average prices by duration
        $averagePrices = [
            'daily' => RentalPrice::where('duration', 'daily')->avg('price') ?? 0,
            'weekly' => RentalPrice::where('duration', 'weekly')->avg('price') ?? 0,
            'monthly' => RentalPrice::where('duration', 'monthly')->avg('price') ?? 0,
            'yearly' => RentalPrice::where('duration', 'yearly')->avg('price') ?? 0,
        ];

        return view('dashboard', compact(
            'totalPosts',
            'totalProducts', 
            'totalCategories',
            'totalUpsBrands',
            'totalRentalPrices',
            'publishedPosts',
            'draftPosts',
            'recentPosts',
            'inStockProducts',
            'outOfStockProducts',
            'lowStockProducts',
            'activeCategories',
            'inactiveCategories',
            'productsByCategory',
            'recentActivity',
            'monthlyPosts',
            'stockStatus',
            'topProducts',
            'recentPostsList',
            'rentalPricesSummary',
            'averagePrices'
        ));
    }

    /**
     * Get statistics data for AJAX requests.
     */
    public function getStats(Request $request)
    {
        $type = $request->get('type', 'overview');

        switch ($type) {
            case 'posts':
                return response()->json([
                    'total' => Post::count(),
                    'published' => Post::where('status', 'published')->count(),
                    'draft' => Post::where('status', 'draft')->count(),
                    'this_month' => Post::whereMonth('created_at', Carbon::now()->month)->count(),
                ]);

            case 'products':
                return response()->json([
                    'total' => Product::count(),
                    'in_stock' => Product::where('stock', '>', 0)->count(),
                    'out_of_stock' => Product::where('stock', '=', 0)->count(),
                    'low_stock' => Product::where('stock', '>', 0)->where('stock', '<=', 5)->count(),
                ]);

            case 'categories':
                return response()->json([
                    'total' => Category::count(),
                    'active' => Category::where('is_active', true)->count(),
                    'inactive' => Category::where('is_active', false)->count(),
                ]);

            default:
                return response()->json([
                    'total_posts' => Post::count(),
                    'total_products' => Product::count(),
                    'total_categories' => Category::count(),
                    'total_ups_brands' => UpsBrand::count(),
                ]);
        }
    }

    /**
     * Get chart data for specific metrics.
     */
    public function getChartData(Request $request)
    {
        $chart = $request->get('chart', 'monthly_posts');

        switch ($chart) {
            case 'monthly_posts':
                $data = [];
                for ($i = 5; $i >= 0; $i--) {
                    $date = Carbon::now()->subMonths($i);
                    $count = Post::whereYear('created_at', $date->year)
                                ->whereMonth('created_at', $date->month)
                                ->count();
                    $data[] = [
                        'month' => $date->format('M Y'),
                        'count' => $count
                    ];
                }
                return response()->json($data);

            case 'products_by_category':
                $data = Category::withCount('products')
                    ->having('products_count', '>', 0)
                    ->get()
                    ->map(function ($category) {
                        return [
                            'name' => $category->name,
                            'count' => $category->products_count
                        ];
                    });
                return response()->json($data);

            case 'stock_status':
                $inStock = Product::where('stock', '>', 5)->count();
                $lowStock = Product::where('stock', '>', 0)->where('stock', '<=', 5)->count();
                $outOfStock = Product::where('stock', '=', 0)->count();
                
                return response()->json([
                    ['status' => 'In Stock', 'count' => $inStock],
                    ['status' => 'Low Stock', 'count' => $lowStock],
                    ['status' => 'Out of Stock', 'count' => $outOfStock],
                ]);

            case 'rental_prices_by_duration':
                $data = RentalPrice::select('duration', DB::raw('count(*) as count'), DB::raw('avg(price) as avg_price'))
                    ->groupBy('duration')
                    ->get()
                    ->map(function ($item) {
                        return [
                            'duration' => ucfirst($item->duration),
                            'count' => $item->count,
                            'avg_price' => round($item->avg_price, 2)
                        ];
                    });
                return response()->json($data);

            default:
                return response()->json(['error' => 'Invalid chart type'], 400);
        }
    }
}