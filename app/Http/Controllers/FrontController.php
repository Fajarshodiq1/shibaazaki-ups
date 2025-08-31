<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Documentation;
use App\Models\Post;
use App\Models\Product;
use App\Models\RentalPrice;
use App\Models\UpsBrand;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        // get category
        $categories = Category::all();
        // get ups-brands
        $upsBrands = UpsBrand::all()->take(4);
        // get posts with relation to author
        $products = Product::with(['category', 'rentalPrices'])
            ->where('stock', '>', 0) // Hanya tampilkan yang ada stok
            ->orderBy('created_at', 'desc')
            ->paginate(8);
        $posts = Post::with('author')->latest()->take(3)->get();
        return view('front.pages.home', compact('categories', 'posts', 'products', 'upsBrands'));
    }
    
    // show profile
    public function ProfileShow()
    {
        return view('front.pages.profile');
    }
    public function CategoryShow($slug)
    {
        // get products
        $category = Category::where('slug', $slug)->firstOrFail();
        $products = Product::where('category_id', $category->id)->orderBy('created_at', 'desc')->paginate(10);
        return view('front.category.index', compact('category', 'products'));
    }
    
    // products show
    public function ProductShow($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('front.products.show', compact('product'));
    }

    // post index with search functionality
    public function PostIndex(Request $request)
    {
        $query = Post::with('author');
        
        // Check if there's a search parameter
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                  ->orWhere('content', 'like', '%' . $searchTerm . '%')
                  ->orWhereHas('author', function($authorQuery) use ($searchTerm) {
                      $authorQuery->where('name', 'like', '%' . $searchTerm . '%');
                  });
            });
        }
        
        $posts = $query->latest()->paginate(10)->appends($request->query());
        
        // Pass search term to view for maintaining search input value
        return view('front.post.index', compact('posts'))->with('searchTerm', $request->search);
    }

    // show post detail
    public function PostShow($slug)
    {
        // get data categories
        $categories = Category::all();
        $post = Post::where('slug', $slug)->with('author')->firstOrFail();
        $morePosts = Post::published()->where('id', '!=', $post->id)->latest()->take(3)->get();
        return view('front.post.show', compact('post', 'categories', 'morePosts'));
    }
    
    public function DocumentationIndex(Request $request)
    {
        $query = Documentation::orderBy('created_at', 'desc');

        if ($request->filled('search')) {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('content', 'like', '%' . $request->search . '%');
        }

        $documentations = $query->paginate(10)->withQueryString();

        return view('front.documentation.index', compact('documentations'));
    }

    // ========== RENTAL METHODS ==========
    
    /**
     * Display rental prices for all UPS products.
     */
    public function RentalIndex(Request $request)
    {
        $query = Product::with(['category', 'rentalPrices'])
            ->where('stock', '>', 0)
            ->whereHas('rentalPrices'); // Only products with rental prices

        // Filter by category if requested
        if ($request->has('category') && !empty($request->category)) {
            $query->whereHas('category', function($q) use ($request) {
                $q->where('slug', $request->category);
            });
        }

        // Filter by duration if requested
        if ($request->has('duration') && !empty($request->duration)) {
            $query->whereHas('rentalPrices', function($q) use ($request) {
                $q->where('duration', $request->duration);
            });
        }

        // Search functionality
        if ($request->has('search') && !empty($request->search)) {
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm) {
                $q->where('name', 'like', '%' . $searchTerm . '%')
                  ->orWhere('brand', 'like', '%' . $searchTerm . '%')
                  ->orWhere('capacity', 'like', '%' . $searchTerm . '%');
            });
        }

        $products = $query->orderBy('created_at', 'desc')->paginate(12)->appends($request->query());
        
        // Get categories for filter (only categories that have products with rental prices)
        $categories = Category::whereHas('products.rentalPrices')->get();
        
        // Get available durations
        $durations = RentalPrice::getDurationOptions();

        return view('front.rental.index', compact('products', 'categories', 'durations'))
            ->with('searchTerm', $request->search)
            ->with('selectedCategory', $request->category)
            ->with('selectedDuration', $request->duration);
    }

    /**
     * Show detailed rental prices for a specific product.
     */
    public function RentalShow($slug)
    {
        $product = Product::where('slug', $slug)
            ->with(['category', 'rentalPrices' => function($query) {
                $query->orderBy('price', 'asc');
            }])
            ->whereHas('rentalPrices')
            ->firstOrFail();

        // Get similar products (same category, different product)
        $similarProducts = Product::where('category_id', $product->category_id)
            ->where('id', '!=', $product->id)
            ->where('stock', '>', 0)
            ->whereHas('rentalPrices')
            ->with('rentalPrices')
            ->take(4)
            ->get();

        return view('front.rental.show', compact('product', 'similarProducts'));
    }

    public function UpsBrandsIndex(Request $request)
    {
        $query = UpsBrand::query();

        // kalau ada parameter ?search=...
        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }

        $upsBrands = $query->paginate(12)->withQueryString(); // biar query search ikut di pagination

        return view('front.ups-brands.index', compact('upsBrands'));
    } 
    public function UpsBrandShow($slug)
    {
        $upsBrand = UpsBrand::where('slug', $slug)->firstOrFail();
        return view('front.ups-brands.show', compact('upsBrand'));
    }
}