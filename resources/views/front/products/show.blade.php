@extends('layouts.template')

@section('title', $product->name . ' - Detail Produk')

@section('content')
    <div class="min-h-screen bg-img-black mt-20">
        <!-- Breadcrumb -->
        <section class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
            <nav class="flex items-center space-x-2 text-sm text-belibang-grey">
                <a href="{{ route('pages.home') }}" class="hover:text-white transition-colors">Home</a>
                <span>/</span>
                <a href="{{ route('front.category.show', $product->category->slug) }}"
                    class="hover:text-white transition-colors">
                    {{ $product->category->name }}
                </a>
                <span>/</span>
                <span class="text-white">{{ $product->name }}</span>
            </nav>
        </section>

        <!-- Product Detail -->
        <section class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Image -->
                <div class="space-y-4">
                    <div class="relative group">
                        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                            class="w-full h-96 lg:h-[500px] object-cover rounded-2xl bg-belibang-darker-grey">
                        <!-- Zoom overlay -->
                        <div
                            class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-20 transition-all duration-300 rounded-2xl flex items-center justify-center">
                            <span class="text-white opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="space-y-6">
                    <!-- Category & Brand -->
                    <div class="flex items-center gap-3">
                        <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">
                            {{ $product->category->name }}
                        </span>
                        <span class="bg-green-600 text-white px-3 py-1 rounded-full text-sm">
                            {{ $product->brand }}
                        </span>
                    </div>

                    <!-- Product Name -->
                    <h1 class="text-3xl lg:text-4xl font-bold text-white">{{ $product->name }}</h1>

                    <!-- Capacity (if available) -->
                    @if ($product->capacity)
                        <div class="flex items-center gap-2">
                            <span class="text-belibang-grey">Kapasitas:</span>
                            <span class="text-white font-medium">{{ $product->capacity }}</span>
                        </div>
                    @endif

                    <!-- Price -->
                    <div class="bg-belibang-darker-grey rounded-lg p-6">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-3xl font-bold text-belibang-orange">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </p>
                                <p class="text-sm text-belibang-grey mt-1">Harga sudah termasuk PPN</p>
                            </div>
                            <div class="text-right">
                                <p class="text-sm text-belibang-grey">Stok tersedia</p>
                                <p class="text-lg font-bold text-green-500">{{ $product->stock }} unit</p>
                            </div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-4">
                        <!-- Contact Buttons -->
                        <div class="flex flex-col md:flex-row gap-4">
                            <x-front-button-primary
                                href="https://wa.me/6281318222618?text=Halo, saya tertarik dengan produk {{ $product->name }}, bolehkah saya bertanya terkait produk tersebut"
                                target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.520-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                WhatsApp 1
                            </x-front-button-primary>
                            <x-front-button-seccondary
                                href="https://wa.me/6282123059203?text=Halo, saya tertarik dengan produk {{ $product->name }}, bolehkah saya bertanya terkait produk tersebut"
                                target="_blank">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.520-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893A11.821 11.821 0 0020.885 3.488" />
                                </svg>
                                WhatsApp 2
                            </x-front-button-seccondary>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Description -->
            <div class="mt-16">
                <div class="bg-belibang-darker-grey rounded-2xl p-8">
                    <h2 class="text-2xl font-bold text-white mb-6">Deskripsi Produk</h2>
                    <div class="prose prose-invert max-w-none w-full text-[15px] md:text-base lg:text-lg">
                        {!! $product->description !!}
                    </div>
                </div>
            </div>

            <!-- Specifications -->
            <div class="mt-8">
                <div class="bg-belibang-darker-grey rounded-2xl p-8 w-full">
                    <h2 class="text-2xl font-bold text-white mb-6">Spesifikasi</h2>
                    <div class="space-y-4">
                        <div class="flex justify-between py-2 border-b border-gray-700">
                            <span class="text-belibang-grey">Brand</span>
                            <span class="text-white font-medium">{{ $product->brand }}</span>
                        </div>

                        @if ($product->capacity)
                            <div class="flex justify-between py-2 border-b border-gray-700">
                                <span class="text-belibang-grey">Kapasitas</span>
                                <span class="text-white font-medium">{{ $product->capacity }}</span>
                            </div>
                        @endif

                        <div class="flex justify-between py-2 border-b border-gray-700">
                            <span class="text-belibang-grey">Kategori</span>
                            <span class="text-white font-medium">{{ $product->category->name }}</span>
                        </div>

                        <div class="flex justify-between py-2 border-b border-gray-700">
                            <span class="text-belibang-grey">Stok</span>
                            <span class="text-white font-medium">{{ $product->stock }} unit</span>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <!-- Related Products -->
        <section class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <h2 class="text-2xl font-bold text-white mb-8">Produk Serupa</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                @php
                    $relatedProducts = App\Models\Product::where('category_id', $product->category_id)
                        ->where('id', '!=', $product->id)
                        ->take(4)
                        ->get();
                @endphp

                @forelse($relatedProducts as $item)
                    <div
                        class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="flex flex-col p-4 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                            <div class="relative mb-4">
                                <img src="{{ Storage::url($item->image) }}" alt="{{ $item->name }}"
                                    class="w-full h-36 object-cover rounded-lg">
                                <span
                                    class="absolute top-2 right-2 bg-green-600 text-white text-xs px-2 py-1 rounded-full">{{ $item->brand }}</span>
                            </div>
                            <div class="flex-1">
                                <h3 class="font-bold text-sm mb-2">{{ $item->name }}</h3>
                                <div class="flex items-center justify-between">
                                    <p class="text-lg font-bold text-belibang-orange">
                                        Rp {{ number_format($item->price, 0, ',', '.') }}
                                    </p>
                                    <a href="{{ route('products.show', $item->slug) }}"
                                        class="px-3 py-1 bg-img-purple-to-orange rounded-lg text-xs font-medium hover:opacity-90 transition-opacity">
                                        Detail
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <x-empty-state title="Tidak ada data produk" message="Data akan segera tersedia disini." />
                @endforelse
            </div>
        </section>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const quantityInput = document.getElementById('quantity');
            const decreaseBtn = document.getElementById('decrease-qty');
            const increaseBtn = document.getElementById('increase-qty');
            const maxStock = {{ $product->stock }};

            decreaseBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            increaseBtn.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue < maxStock) {
                    quantityInput.value = currentValue + 1;
                }
            });

            quantityInput.addEventListener('change', function() {
                let value = parseInt(this.value);
                if (value < 1) {
                    this.value = 1;
                } else if (value > maxStock) {
                    this.value = maxStock;
                }
            });
        });
    </script>
@endsection
