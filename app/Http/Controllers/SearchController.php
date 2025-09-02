<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Product;
use App\Models\UpsBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->get('q', '');
        $limit = $request->get('limit', 10); // Batasi hasil untuk performa
        
        if (strlen($query) < 2) {
            return response()->json([
                'data' => [],
                'total' => 0,
                'query' => $query,
                'message' => 'Minimal 2 karakter untuk pencarian'
            ]);
        }
        
        $results = collect();
        
        // 1. Search Products (UPS)
        $products = Product::with(['category'])
            ->where('stock', '>', 0)
            ->where(function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('brand', 'LIKE', "%{$query}%")
                  ->orWhere('capacity', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%");
            })
            ->limit($limit)
            ->get()
            ->map(function($product) {
                return [
                    'id' => $product->id,
                    'type' => 'product',
                    'title' => $product->name,
                    'subtitle' => $product->brand . ' - ' . $product->capacity,
                    'description' => $product->description ? Str::limit($product->description, 100) : null,
                    'price' => $product->price,
                    'image' => $product->image,
                    'url' => route('products.show', $product->slug),
                    'category' => $product->category->name ?? null,
                    'stock' => $product->stock,
                    'badge' => 'Produk'
                ];
            });
        
        $results = $results->merge($products);
        
        // 2. Search Categories
        $categories = Category::where('is_active', true)
            ->where(function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%");
            })
            ->limit(5)
            ->get()
            ->map(function($category) {
                return [
                    'id' => $category->id,
                    'type' => 'category',
                    'title' => $category->name,
                    'subtitle' => 'Kategori Produk',
                    'description' => $category->description ? Str::limit($category->description, 100) : null,
                    'image' => $category->image,
                    'url' => route('front.category.show', $category->slug),
                    'badge' => 'Kategori'
                ];
            });
        
        $results = $results->merge($categories);
        
        // 3. Search Posts/Articles
        $posts = Post::with('author')
            ->where(function($q) use ($query) {
                $q->where('title', 'LIKE', "%{$query}%")
                  ->orWhere('content', 'LIKE', "%{$query}%");
            })
            ->limit(5)
            ->get()
            ->map(function($post) {
                return [
                    'id' => $post->id,
                    'type' => 'post',
                    'title' => $post->title,
                    'subtitle' => 'Artikel - ' . ($post->author->name ?? 'Admin'),
                    'description' => Str::limit(strip_tags($post->content), 100),
                    'image' => $post->image ?? null,
                    'url' => route('front.post.show', $post->slug),
                    'badge' => 'Artikel'
                ];
            });
        
        $results = $results->merge($posts);
        
        // 4. Search UPS Brands
        $brands = UpsBrand::where('name', 'LIKE', "%{$query}%")
            ->limit(5)
            ->get()
            ->map(function($brand) {
                return [
                    'id' => $brand->id,
                    'type' => 'brand',
                    'title' => $brand->name,
                    'subtitle' => 'Brand UPS',
                    'description' => $brand->description ? Str::limit($brand->description, 100) : null,
                    'image' => $brand->logo ?? null,
                    'url' => route('front.ups-brands.show', $brand->slug),
                    'badge' => 'Brand'
                ];
            });
        
        $results = $results->merge($brands);
        
        // Sort by relevance (products first, then others)
        $sortedResults = $results->sortBy(function($item) {
            return match($item['type']) {
                'product' => 1,
                'category' => 2,
                'brand' => 3,
                'post' => 4,
                default => 5
            };
        })->take($limit);
        
        return response()->json([
            'data' => $sortedResults->values(),
            'total' => $sortedResults->count(),
            'query' => $query,
            'types_found' => $results->groupBy('type')->map->count(),
            'success' => true
        ]);
    }
    
    /**
     * Get search suggestions/autocomplete
     */
    public function suggestions(Request $request)
    {
        $query = $request->get('q', '');
        
        if (strlen($query) < 2) {
            return response()->json(['suggestions' => []]);
        }
        
        $suggestions = collect();
        
        // Product names and brands
        $productSuggestions = Product::where('stock', '>', 0)
            ->where(function($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('brand', 'LIKE', "%{$query}%")
                  ->orWhere('capacity', 'LIKE', "%{$query}%");
            })
            ->limit(5)
            ->pluck('name')
            ->unique();
        
        $suggestions = $suggestions->merge($productSuggestions);
        
        // Category names
        $categorySuggestions = Category::where('is_active', true)
            ->where('name', 'LIKE', "%{$query}%")
            ->limit(3)
            ->pluck('name');
        
        $suggestions = $suggestions->merge($categorySuggestions);
        
        // Brand names
        $brandSuggestions = UpsBrand::where('name', 'LIKE', "%{$query}%")
            ->limit(3)
            ->pluck('name');
        
        $suggestions = $suggestions->merge($brandSuggestions);
        
        return response()->json([
            'suggestions' => $suggestions->unique()->take(8)->values()
        ]);
    }
}