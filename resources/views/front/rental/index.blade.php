@extends('layouts.template')
@section('title', 'PT Shibaazaki - Rental UPS')
@section('meta_description', 'Temukan harga sewa UPS terbaik untuk kebutuhan bisnis Anda dengan berbagai pilihan durasi
    rental')
@section('meta_keywords', 'rental ups, sewa ups, harga rental ups, harga sewa ups, rental ups jakarta, rental ups
    bekasi, rental ups tangerang, rental ups depok, rental ups bogor')
@section('content')
    <x-hero-header title="Rental UPS"
        subtitle="Temukan harga sewa UPS terbaik untuk kebutuhan bisnis Anda dengan berbagai pilihan durasi rental" />
    <x-breadcrumb :items="[['label' => 'Beranda', 'url' => route('pages.home')], ['label' => 'Rental UPS']]" />
    <x-search-bar :action="route('rental.index')" placeholder="Cari produk rental..." :collection="$products" label="produk rental" />
    <!-- Products Section -->
    <section class="container max-w-7xl mx-auto mb-20 px-5">
        @if ($products->count() > 0)
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <div
                        class="rental-card flex flex-col rounded-3xl bg-belibang-darker-grey overflow-hidden hover:transform hover:scale-105 transition-all duration-300 border border-gray-800 hover:border-gray-600">
                        <!-- Product Image -->
                        <a href="{{ route('rental.show', $product->slug) }}"
                            class="thumbnail w-full h-48 flex shrink-0 overflow-hidden relative">
                            <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/300x200?text=UPS' }}"
                                class="w-full h-full object-cover" alt="{{ $product->name }}" />
                        </a>

                        <!-- Product Info -->
                        <div class="p-4 h-full flex flex-col justify-between">
                            <div class="flex flex-col gap-3 mb-6">
                                <!-- Product Name & Brand -->
                                <div>
                                    <a href="{{ route('rental.show', $product->slug) }}"
                                        class="font-bold text-lg text-white hover:text-blue-400 transition-colors line-clamp-2">
                                        {{ $product->name }}
                                    </a>
                                    <p class="text-gray-400 text-sm">{{ $product->brand }}</p>
                                </div>

                                <!-- Capacity -->
                                @if ($product->capacity)
                                    <div class="flex items-center gap-2">
                                        <span class="bg-gray-700 text-gray-300 px-2 py-1 rounded text-xs">
                                            {{ $product->capacity }}
                                        </span>
                                    </div>
                                @endif

                                <!-- Rental Prices -->
                                <div class="space-y-2">
                                    @foreach ($product->rentalPrices->take(3) as $rental)
                                        <div class="flex justify-between items-center">
                                            <span class="text-gray-400 text-sm capitalize">{{ $rental->duration }}</span>
                                            <span class="text-white font-semibold">{{ $rental->formatted_price }}</span>
                                        </div>
                                    @endforeach

                                    @if ($product->rentalPrices->count() > 3)
                                        <p class="text-blue-400 text-xs">+{{ $product->rentalPrices->count() - 3 }}
                                            more options</p>
                                    @endif
                                </div>
                            </div>

                            <!-- Action Button -->
                            <x-front-button-primary href="{{ route('rental.show', $product->slug) }}">
                                Lihat Detail Rental
                            </x-front-button-primary>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-center">
                {{ $products->links('pagination::tailwind') }}
            </div>
        @else
            <!-- Empty State -->
            <div class="text-center py-16">
                <div class="max-w-md mx-auto">
                    <div class="text-gray-500 mb-4">
                        <svg class="w-16 h-16 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-400 mb-2">Tidak ada produk rental ditemukan</h3>
                    <p class="text-gray-500 mb-7">Coba ubah filter pencarian Anda atau hapus beberapa filter</p>
                    <a href="{{ route('rental.index') }}"
                        class="bg-img-purple-to-orange text-white font-semibold py-3 px-5 rounded-full transition-colors duration-200">
                        Reset Filter
                    </a>
                </div>
            </div>
        @endif
    </section>
@endsection
