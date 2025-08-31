@props([
    'product',
    'showPrice' => true,
    'showRating' => false,
    'showBadge' => false,
    'showButton' => true,
    'buttonText' => 'Lihat Detail',
    'href' => null,
])

<x-card :title="$product->name" :description="$product->description ?? $product->short_description" :image="Storage::url($product->image)" :href="$href ?? route('products.show', $product->slug)" :button-text="$showButton ? $buttonText : null" :button-href="$href ?? route('products.show', $product->slug)"
    button-variant="primary" :clickable-card="!$showButton" variant="product" {{ $attributes }}>

    @if ($showPrice && isset($product->price))
        <div class="flex items-center justify-between mb-2">
            <span class="text-lg font-bold text-green-600">
                Rp {{ number_format($product->price, 0, ',', '.') }}
            </span>
            @if ($product->original_price ?? false)
                <span class="text-sm text-gray-400 line-through">
                    Rp {{ number_format($product->original_price, 0, ',', '.') }}
                </span>
            @endif
        </div>
    @endif

    @if ($showRating && isset($product->rating))
        <div class="flex items-center mt-2">
            <div class="flex items-center">
                @for ($i = 1; $i <= 5; $i++)
                    <svg class="w-4 h-4 {{ $i <= $product->rating ? 'text-yellow-400' : 'text-gray-300' }}"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                @endfor
            </div>
            <span class="ml-1 text-sm text-gray-600">({{ $product->reviews_count ?? 0 }})</span>
        </div>
    @endif

    @if ($showBadge)
        <div class="absolute top-3 right-3">
            @if ($product->is_new ?? false)
                <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full">Baru</span>
            @elseif($product->discount_percent ?? false)
                <span
                    class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">-{{ $product->discount_percent }}%</span>
            @endif
        </div>
    @endif
</x-card>
