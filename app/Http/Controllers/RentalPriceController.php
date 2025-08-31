<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\RentalPrice;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RentalPriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $rentalPrices = RentalPrice::with('product')
            ->latest()
            ->paginate(10);
            
        return view('rental-prices.index', compact('rentalPrices'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $products = Product::all();
        $durations = RentalPrice::getDurationOptions();
        
        return view('rental-prices.create', compact('products', 'durations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'duration' => 'required|in:daily,weekly,monthly,yearly',
            'price' => 'required|numeric|min:0|max:999999999999.99'
        ]);

        // Check if rental price for this product and duration already exists
        $existingPrice = RentalPrice::where('product_id', $validated['product_id'])
            ->where('duration', $validated['duration'])
            ->first();

        if ($existingPrice) {
            return back()->withErrors([
                'duration' => 'Rental price for this product and duration already exists.'
            ])->withInput();
        }

        RentalPrice::create($validated);

        return redirect()->route('rental-prices.index')
            ->with('success', 'Rental price created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(RentalPrice $rentalPrice): View
    {
        $rentalPrice->load('product');
        
        return view('rental-prices.show', compact('rentalPrice'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RentalPrice $rentalPrice): View
    {
        $products = Product::all();
        $durations = RentalPrice::getDurationOptions();
        
        return view('rental-prices.edit', compact('rentalPrice', 'products', 'durations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RentalPrice $rentalPrice): RedirectResponse
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'duration' => 'required|in:daily,weekly,monthly,yearly',
            'price' => 'required|numeric|min:0|max:999999999999.99'
        ]);

        // Check if rental price for this product and duration already exists (excluding current record)
        $existingPrice = RentalPrice::where('product_id', $validated['product_id'])
            ->where('duration', $validated['duration'])
            ->where('id', '!=', $rentalPrice->id)
            ->first();

        if ($existingPrice) {
            return back()->withErrors([
                'duration' => 'Rental price for this product and duration already exists.'
            ])->withInput();
        }

        $rentalPrice->update($validated);

        return redirect()->route('rental-prices.index')
            ->with('success', 'Rental price updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RentalPrice $rentalPrice): RedirectResponse
    {
        $rentalPrice->delete();

        return redirect()->route('rental-prices.index')
            ->with('success', 'Rental price deleted successfully.');
    }
}