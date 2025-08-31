@props([
    'product',
    'showPricing' => true,
    'showButton' => true,
    'buttonText' => 'Sewa Sekarang',
    'buttonVariant' => 'primary',
    'href' => null,
    'showAvailability' => true,
    'showSpecifications' => false,
    'highlightBestValue' => true,
    'defaultDuration' => 'monthly',
])

@php
    $rentalPrices = $product->rentalPrices ?? collect();
    $sortedPrices = $rentalPrices->sortBy(function ($price) {
        $order = ['daily' => 1, 'weekly' => 2, 'monthly' => 3, 'yearly' => 4];
        return $order[$price->duration] ?? 5;
    });

    $bestValueDuration = $highlightBestValue ? $rentalPrices->where('duration', 'monthly')->first() : null;
@endphp

<div class="group relative bg-belibang-dark-grey rounded-2xl border-2 hover:shadow-lg transition-all duration-300 overflow-hidden {{ $attributes->get('class') }}"
    {{ $attributes->except('class') }}>

    <!-- Product Image -->
    <div class="relative h-48 sm:h-56 overflow-hidden">
        @if ($product->image)
            <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
        @endif

        <!-- Availability Badge -->
        @if ($showAvailability)
            <div class="absolute top-3 left-3">
                @if ($product->is_available ?? true)
                    <span class="bg-green-500 text-white text-xs px-2 py-1 rounded-full flex items-center">
                        <div class="w-2 h-2 bg-white rounded-full mr-1"></div>
                        Tersedia
                    </span>
                @else
                    <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full">
                        Tidak Tersedia
                    </span>
                @endif
            </div>
        @endif

        <!-- Best Value Badge -->
        @if ($highlightBestValue && $bestValueDuration)
            <div class="absolute top-3 right-3">
                <span class="bg-orange-500 text-white text-xs px-2 py-1 rounded-full font-medium">
                    Best Value
                </span>
            </div>
        @endif
    </div>

    <!-- Content -->
    <div class="p-5">
        <!-- Title & Description -->
        <div class="mb-4">
            <h3 class="font-bold text-lg sm:text-xl mb-2 line-clamp-2">{{ $product->name }}</h3>
            @if ($product->description)
                <p class="text-sm text-gray-600 line-clamp-2">{!! Str::limit(strip_tags($product->description), 100) !!}</p>
            @endif
        </div>

        <!-- Specifications (Optional) -->
        @if ($showSpecifications && ($product->specifications ?? false))
            <div class="mb-4 text-xs text-gray-500">
                <div class="flex flex-wrap gap-2">
                    @foreach (json_decode($product->specifications, true) ?? [] as $spec => $value)
                        <span class="bg-gray-100 px-2 py-1 rounded">{{ $spec }}: {{ $value }}</span>
                    @endforeach
                </div>
            </div>
        @endif

        <!-- Rental Pricing -->
        @if ($showPricing && $rentalPrices->isNotEmpty())
            <div class="mb-4">
                <h4 class="font-semibold text-sm text-gray-700 mb-3">Pilihan Sewa:</h4>
                <div class="space-y-2">
                    @foreach ($sortedPrices->take(3) as $rentalPrice)
                        <div
                            class="flex items-center justify-between p-2 rounded-lg 
                           {{ $rentalPrice->duration === $defaultDuration ? 'bg-blue-50 border border-blue-200' : 'bg-gray-50' }}">
                            <div class="flex items-center">
                                <span class="text-sm font-medium capitalize">
                                    {{ str_replace('ly', '', $rentalPrice->duration) }}
                                </span>
                                @if ($rentalPrice->duration === 'monthly' && $highlightBestValue)
                                    <span class="ml-2 text-xs bg-orange-100 text-orange-600 px-1 py-0.5 rounded">
                                        Hemat
                                    </span>
                                @endif
                            </div>
                            <span class="font-bold text-sm text-blue-600">
                                {{ $rentalPrice->formatted_price }}
                            </span>
                        </div>
                    @endforeach

                    @if ($rentalPrices->count() > 3)
                        <div class="text-center">
                            <span class="text-xs text-gray-500">+{{ $rentalPrices->count() - 3 }} opsi lainnya</span>
                        </div>
                    @endif
                </div>
            </div>
        @endif

        <!-- Action Button -->
        @if ($showButton)
            <div class="mt-4">
                <a href="{{ $href ?? route('rental-prices.show', $product->slug) }}"
                    class="w-full inline-flex items-center justify-center px-4 py-3 rounded-lg font-medium text-sm transition-colors duration-200
                      @if ($buttonVariant === 'primary') bg-blue-600 hover:bg-blue-700 text-white
                      @elseif($buttonVariant === 'success') bg-green-600 hover:bg-green-700 text-white
                      @elseif($buttonVariant === 'outline') border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white
                      @else bg-gray-600 hover:bg-gray-700 text-white @endif">
                    {{ $buttonText }}
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        @endif

        <!-- Additional Info -->
        @if ($product->category ?? false)
            <div class="mt-3 pt-3 border-t border-gray-200">
                <div class="flex items-center justify-between text-xs text-gray-500">
                    <span class="flex items-center">
                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" />
                        </svg>
                        {{ $product->category->name }}
                    </span>
                    @if ($product->location ?? false)
                        <span class="flex items-center">
                            <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            {{ $product->location }}
                        </span>
                    @endif
                </div>
            </div>
        @endif
    </div>

    <!-- Hover Overlay untuk Enhanced UX -->
    <div
        class="absolute inset-0 bg-blue-600/0 group-hover:bg-blue-600/5 transition-all duration-300 pointer-events-none rounded-2xl">
    </div>
</div>
