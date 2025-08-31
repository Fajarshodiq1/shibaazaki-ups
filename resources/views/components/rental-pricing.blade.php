{{-- resources/views/components/rental-pricing.blade.php --}}
{{-- Standalone pricing widget untuk detail page --}}
@props([
    'product',
    'selectedDuration' => 'monthly',
    'showCalculator' => false,
    'showComparison' => true,
    'showButton' => true,
    'buttonText' => 'Sewa Sekarang',
    'buttonVariant' => 'primary',
    'href' => null,
])
@php
    $rentalPrices = $product->rentalPrices ?? collect();
    $sortedPrices = $rentalPrices->sortBy(function ($price) {
        $order = ['daily' => 1, 'weekly' => 2, 'monthly' => 3, 'yearly' => 4];
        return $order[$price->duration] ?? 5;
    });
@endphp

<div class="bg-white rounded-2xl border-2 border-gray-200 p-6 {{ $attributes->get('class') }}"
    {{ $attributes->except('class') }}>

    <h3 class="font-bold text-xl mb-4 text-gray-800">Pilihan Paket Sewa</h3>

    <!-- Pricing Options -->
    <div class="space-y-3 mb-6">
        @foreach ($sortedPrices as $rentalPrice)
            @php
                $isPopular = $rentalPrice->duration === 'monthly';
                $savings = '';
                if ($rentalPrice->duration === 'yearly' && $rentalPrices->where('duration', 'monthly')->first()) {
                    $monthlyPrice = $rentalPrices->where('duration', 'monthly')->first()->price;
                    $yearlySavings = $monthlyPrice * 12 - $rentalPrice->price;
                    if ($yearlySavings > 0) {
                        $savings = 'Hemat ' . number_format($yearlySavings, 0, ',', '.');
                    }
                }
            @endphp

            <label
                class="relative flex items-center p-4 rounded-xl border-2 cursor-pointer transition-all duration-200
                     {{ $rentalPrice->duration === $selectedDuration ? 'border-blue-500 bg-blue-50' : 'border-gray-200 hover:border-gray-300' }}">
                <input type="radio" name="rental_duration" value="{{ $rentalPrice->duration }}"
                    {{ $rentalPrice->duration === $selectedDuration ? 'checked' : '' }} class="sr-only"
                    onchange="updateRentalPrice('{{ $rentalPrice->duration }}', {{ $rentalPrice->price }})">

                <div class="flex-1">
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <span class="font-semibold text-lg capitalize">
                                {{ str_replace('ly', '', $rentalPrice->duration) }}
                            </span>
                            @if ($isPopular)
                                <span class="ml-2 bg-blue-500 text-white text-xs px-2 py-1 rounded-full">
                                    Populer
                                </span>
                            @endif
                        </div>
                        <div class="text-right">
                            <span class="font-bold text-xl text-blue-600">
                                {{ $rentalPrice->formatted_price }}
                            </span>
                            @if ($savings)
                                <div class="text-xs text-green-600 font-medium">{{ $savings }}</div>
                            @endif
                        </div>
                    </div>

                    @if ($rentalPrice->duration === 'daily')
                        <p class="text-sm text-gray-500 mt-1">Perfect untuk testing</p>
                    @elseif($rentalPrice->duration === 'weekly')
                        <p class="text-sm text-gray-500 mt-1">Ideal untuk proyek singkat</p>
                    @elseif($rentalPrice->duration === 'monthly')
                        <p class="text-sm text-gray-500 mt-1">Pilihan terpopuler untuk bisnis</p>
                    @elseif($rentalPrice->duration === 'yearly')
                        <p class="text-sm text-gray-500 mt-1">Maksimal savings untuk long-term</p>
                    @endif
                </div>

                <!-- Radio Button Visual -->
                <div
                    class="w-5 h-5 ml-4 rounded-full border-2 flex items-center justify-center
                       {{ $rentalPrice->duration === $selectedDuration ? 'border-blue-500' : 'border-gray-300' }}">
                    @if ($rentalPrice->duration === $selectedDuration)
                        <div class="w-3 h-3 bg-blue-500 rounded-full"></div>
                    @endif
                </div>
            </label>
        @endforeach
    </div>

    <!-- Price Comparison Table (Optional) -->
    @if ($showComparison && $rentalPrices->count() > 1)
        <div class="bg-gray-50 rounded-lg p-4 mb-6">
            <h4 class="font-semibold text-sm text-gray-700 mb-3">Perbandingan Harga:</h4>
            <div class="space-y-2">
                @foreach ($sortedPrices as $price)
                    @php
                        $dailyRate =
                            $price->duration === 'daily'
                                ? $price->price
                                : ($price->duration === 'weekly'
                                    ? $price->price / 7
                                    : ($price->duration === 'monthly'
                                        ? $price->price / 30
                                        : ($price->duration === 'yearly'
                                            ? $price->price / 365
                                            : $price->price)));
                    @endphp
                    <div class="flex justify-between text-sm">
                        <span class="capitalize">{{ str_replace('ly', '', $price->duration) }}</span>
                        <span class="font-medium">
                            {{ $price->formatted_price }}
                            <span class="text-xs text-gray-500">
                                (~Rp {{ number_format($dailyRate, 0, ',', '.') }}/hari)
                            </span>
                        </span>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Rental Calculator (Optional) -->
    @if ($showCalculator)
        <div class="bg-blue-50 rounded-lg p-4 mb-6">
            <h4 class="font-semibold text-sm text-blue-800 mb-3">Kalkulator Sewa:</h4>
            <div class="flex items-center space-x-3">
                <label class="text-sm text-blue-700">Durasi:</label>
                <input type="number" id="rental-quantity" min="1" value="1"
                    class="w-20 px-2 py-1 border border-blue-300 rounded text-sm" onchange="calculateRentalTotal()">
                <span class="text-sm text-blue-700" id="duration-unit">Bulan</span>
            </div>
            <div class="mt-3 p-3 bg-white rounded border border-blue-200">
                <div class="flex justify-between">
                    <span class="text-sm font-medium">Total:</span>
                    <span class="font-bold text-lg text-blue-600" id="total-price">
                        {{ $rentalPrices->where('duration', $selectedDuration)->first()->formatted_price ?? 'Rp 0' }}
                    </span>
                </div>
            </div>
        </div>
    @endif

    <!-- Action Button -->
    @if ($showButton)
        <a href="{{ $href ?? route('rental-prices.show', $product->slug) }}"
            class="w-full inline-flex items-center justify-center px-6 py-3 rounded-lg font-semibold text-sm transition-all duration-200 transform hover:scale-105
              @if ($buttonVariant === 'primary') bg-blue-600 hover:bg-blue-700 text-white shadow-lg hover:shadow-xl
              @elseif($buttonVariant === 'success') bg-green-600 hover:bg-green-700 text-white shadow-lg hover:shadow-xl
              @elseif($buttonVariant === 'outline') border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white
              @else bg-gray-600 hover:bg-gray-700 text-white @endif">
            {{ $buttonText }}
            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
        </a>
    @endif

    <!-- Additional Features -->
    <div class="mt-4 pt-4 border-t border-gray-200">
        <div class="flex items-center justify-center space-x-6 text-xs text-gray-500">
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
                Free Setup
            </div>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192L5.636 18.364" />
                </svg>
                24/7 Support
            </div>
            <div class="flex items-center">
                <svg class="w-4 h-4 mr-1 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Garansi
            </div>
        </div>
    </div>
</div>

<script>
    function updateRentalPrice(duration, price) {
        // Update UI when duration changes
        document.getElementById('total-price').textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(price);

        // Update duration unit for calculator
        const durationUnit = document.getElementById('duration-unit');
        if (durationUnit) {
            const units = {
                'daily': 'Hari',
                'weekly': 'Minggu',
                'monthly': 'Bulan',
                'yearly': 'Tahun'
            };
            durationUnit.textContent = units[duration] || 'Bulan';
        }

        // Store current selection for calculator
        window.currentRentalPrice = price;
        window.currentDuration = duration;

        calculateRentalTotal();
    }

    function calculateRentalTotal() {
        const quantity = document.getElementById('rental-quantity')?.value || 1;
        const currentPrice = window.currentRentalPrice || 0;
        const total = currentPrice * quantity;

        const totalElement = document.getElementById('total-price');
        if (totalElement) {
            totalElement.textContent = 'Rp ' + new Intl.NumberFormat('id-ID').format(total);
        }
    }

    // Initialize on page load
    document.addEventListener('DOMContentLoaded', function() {
        const firstRadio = document.querySelector('input[name="rental_duration"]:checked');
        if (firstRadio) {
            const duration = firstRadio.value;
            const priceElement = firstRadio.closest('label').querySelector('.text-blue-600');
            if (priceElement) {
                const price = priceElement.textContent.replace(/[^\d]/g, '');
                window.currentRentalPrice = parseInt(price);
                window.currentDuration = duration;
            }
        }
    });
</script>
