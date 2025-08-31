@extends('layouts.template')

@section('title', 'Rental ' . $product->name)
@section('meta_title', 'Rental ' . $product->name . ' - PT Shibaazaki')
@section('meta_keywords', 'rental ups, sewa ups, harga rental ups, harga sewa ups, rental ups jakarta, rental ups
    bekasi, rental ups tangerang, rental ups depok, rental ups bogor, ' . $product->name)
@section('meta_description', 'Temukan harga sewa UPS ' . $product->name . ' terbaik untuk kebutuhan bisnis Anda.')
@section('content')
    <main class="min-h-screen">
        <!-- Breadcrumb -->
        <section class="container max-w-[1230px] mx-auto pt-20 px-5 my-5">
            <x-breadcrumb :items="[
                ['label' => 'Home', 'url' => '/'],
                ['label' => 'Rental', 'url' => route('rental.index')],
                ['label' => $product->name],
            ]" />
        </section>

        <!-- Product Detail -->
        <section class="container max-w-[1230px] mx-auto mb-16 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <!-- Product Image -->
                <div class="lg:sticky lg:top-24 h-fit self-start">
                    <div class="aspect-square bg-[#181818] rounded-2xl overflow-hidden border border-gray-800">
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/600x600?text=UPS' }}"
                            class="w-full h-full object-cover" alt="{{ $product->name }}">
                    </div>
                </div>
                <!-- Product Info -->
                <div class="space-y-6">
                    <!-- Title & Brand -->
                    <div>
                        <div class="flex items-center gap-2 mb-2">
                            <span class="bg-gray-700 text-gray-300 px-3 py-1 rounded-full text-sm">
                                {{ $product->category->name ?? 'UPS' }}
                            </span>
                        </div>
                        <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $product->name }}</h1>
                        <p class="text-gray-400 text-lg">Brand: {{ $product->brand }}</p>
                    </div>

                    <!-- Specifications -->
                    <div class="bg-[#181818] rounded-2xl p-6 border border-gray-800">
                        <h3 class="text-xl font-semibold text-white mb-4">Spesifikasi</h3>
                        <div class="space-y-3">
                            @if ($product->capacity)
                                <div class="flex justify-between">
                                    <span class="text-gray-400">Kapasitas</span>
                                    <span class="text-white font-medium">{{ $product->capacity }}</span>
                                </div>
                            @endif
                            <div class="flex justify-between">
                                <span class="text-gray-400">Stok Tersedia</span>
                                <span class="text-white font-medium">{{ $product->stock }} unit</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-400">Kategori</span>
                                <span class="text-white font-medium">{{ $product->category->name ?? 'UPS' }}</span>
                            </div>
                        </div>
                    </div>

                    <!-- Description -->
                    @if ($product->description)
                        <div class="bg-[#181818] rounded-2xl p-6 border border-gray-800">
                            <h3 class="text-xl font-semibold text-white mb-4">Deskripsi</h3>
                            <div class="text-gray-300 leading-relaxed prose">{!! $product->description !!}</div>
                        </div>
                    @endif

                    <!-- Purchase Option -->
                    @if ($product->price)
                        <div class="bg-[#181818] rounded-2xl p-6 border border-gray-800">
                            <h3 class="text-xl font-semibold text-white mb-3">Harga Beli</h3>
                            <div class="flex items-center justify-between">
                                <span class="text-2xl font-bold text-green-400">{{ $product->formatted_price }}</span>
                                <x-front-button-primary href="#">
                                    Beli Sekarang
                                </x-front-button-primary>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </section>


        <!-- Rental Prices -->
        <section class="container max-w-[1230px] mx-auto mb-16 px-5">
            <div class="bg-[#181818] rounded-2xl p-8 border border-gray-800">
                <h2 class="text-2xl font-bold text-white mb-6">Paket Rental UPS 💰</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($product->rentalPrices as $rental)
                        <div
                            class="bg-belibang-darker-grey rounded-xl p-6 border border-gray-700 hover:bg-img-black-gradient transition-all duration-300 hover:transform hover:scale-105">
                            <div class="text-center">
                                <h3 class="text-lg font-semibold text-white mb-2 capitalize">{{ $rental->duration }}</h3>
                                <div class="text-3xl font-bold text-green-500 mb-4">{{ $rental->formatted_price }}</div>
                                <div class="text-gray-400 text-sm mb-4">
                                    @switch($rental->duration)
                                        @case('daily')
                                            Per Hari
                                        @break

                                        @case('weekly')
                                            Per Minggu
                                        @break

                                        @case('monthly')
                                            Per Bulan
                                        @break

                                        @case('yearly')
                                            Per Tahun
                                        @break
                                    @endswitch
                                </div>
                                {{-- <button
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition-colors duration-200">
                                    Pilih Paket
                                </button> --}}
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Contact Info -->
                <div class="mt-8 pt-8 border-t border-gray-700 text-center">
                    <h3 class="text-lg font-semibold text-white mb-3">Butuh Konsultasi?</h3>
                    <p class="text-gray-400 mb-4">Hubungi tim kami untuk mendapatkan penawaran terbaik sesuai kebutuhan Anda
                    </p>
                    <div class="flex flex-col sm:flex-row justify-center gap-3 sm:gap-4 pt-2 md:pt-4">
                        <x-front-button-primary
                            href="https://wa.me/6281318222618?text=Halo, bolehkah saya berkonsultasi terkait produk shibaazaki">
                            <svg aria-label="WhatsApp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24"
                                height="24" fill="currentColor" class="w-5 h-5">
                                <path
                                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                            </svg>
                            <span>Hubungi Kami</span>
                        </x-front-button-primary>
                        <x-front-button-seccondary href="mailto:ptshibaazaki@gmail.com">
                            <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                            <span class="text-belibang-grey">Email Kami</span>
                        </x-front-button-seccondary>
                    </div>
                </div>
            </div>
        </section>

        <!-- Similar Products -->
        @if ($similarProducts->count() > 0)
            <section class="container max-w-[1230px] mx-auto mb-20 px-5">
                <h2 class="text-2xl font-bold text-white mb-8">Produk UPS Lainnya</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($similarProducts as $similarProduct)
                        <div
                            class="rental-card flex flex-col rounded-2xl bg-[#181818] overflow-hidden hover:transform hover:scale-105 transition-all duration-300 border border-gray-800 hover:border-gray-600">
                            <a href="{{ route('rental.show', $similarProduct->slug) }}"
                                class="thumbnail w-full h-48 flex shrink-0 overflow-hidden relative">
                                <img src="{{ $similarProduct->image ? asset('storage/' . $similarProduct->image) : 'https://via.placeholder.com/300x200?text=UPS' }}"
                                    class="w-full h-full object-cover" alt="{{ $similarProduct->name }}" />
                            </a>
                            <div class="p-4 h-full flex flex-col justify-between">
                                <div>
                                    <a href="{{ route('rental.show', $similarProduct->slug) }}"
                                        class="font-semibold text-lg text-white hover:text-blue-400 transition-colors line-clamp-2 block mb-2">
                                        {{ $similarProduct->name }}
                                    </a>
                                    <p class="text-gray-400 text-sm mb-3">{{ $similarProduct->brand }}</p>
                                    @if ($similarProduct->cheapestRentalPrice)
                                        <div class="text-blue-400 font-medium">
                                            Mulai {{ $similarProduct->cheapestRentalPrice->formatted_price }}
                                        </div>
                                    @endif
                                </div>
                                <a href="{{ route('rental.show', $similarProduct->slug) }}"
                                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-2 px-4 rounded-lg text-center block transition-colors duration-200 mt-3">
                                    Lihat Detail
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif
    </main>
@endsection
