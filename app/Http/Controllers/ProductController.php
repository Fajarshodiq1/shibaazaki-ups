<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // products with category
        $products = Product::with('category')->get();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('products.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'file_upload' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:5120',
            'category_id' => 'required|exists:categories,id',
        ]);

        // handling file upload 📂✅
        if ($request->hasFile('file_upload')) {
            $filePath = $request->file('file_upload')->store('product_files', 'public');
            $validatedData['file_upload'] = $filePath;
        } else {
            $validatedData['file_upload'] = null;
        }

        // Handle image upload 🖼️✅
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image'] = $imagePath;
        } else {
            $validatedData['image'] = null;
        }

        Product::create($validatedData);

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    // show
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('products.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'brand' => 'nullable|string|max:255',
            'capacity' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'file_upload' => 'nullable|file|mimes:pdf,doc,docx,xls,xlsx,ppt,pptx,txt|max:5120',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|exists:categories,id',
        ]);

        // handling file upload 📂✅
        if ($request->hasFile('file_upload')) {
            // Delete old file if exists
            if ($product->file_upload && Storage::disk('public')->exists($product->file_upload)) {
                Storage::disk('public')->delete($product->file_upload);
            }
            
            $filePath = $request->file('file_upload')->store('product_files', 'public');
            $validatedData['file_upload'] = $filePath;
        } else {
            // Keep the existing file if no new file is uploaded
            unset($validatedData['file_upload']);
        }

        // Handle image upload 🖼️✅
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            
            $imagePath = $request->file('image')->store('products', 'public');
            $validatedData['image'] = $imagePath;
        } else {
            // Keep the existing image if no new image is uploaded
            unset($validatedData['image']);
        }

        $product->update($validatedData);

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        // Delete associated image if exists
        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }

        // Delete associated file if exists
        if ($product->file_upload && Storage::disk('public')->exists($product->file_upload)) {
            Storage::disk('public')->delete($product->file_upload);
        }

        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}