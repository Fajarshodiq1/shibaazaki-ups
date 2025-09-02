@extends('layouts.template')
@section('title', 'PT Shibaazaki - Home')
@section('meta_title', 'PT Shibaazaki - Penjualan unit UPS, Rental UPS dan Perawatan Service Maintenance')
@section('meta_description',
    'PT Shibaazaki. Mitra Solusi UPS Tepercaya Anda. Kami sedang berupaya keras untuk meluncurkan situs web yang baru dan
    lebih baik. Pantau terus untuk menjelajahi solusi PT Shibaazaki yang andal dan inovatif untuk penyediaan, penyewaan, dan
    pemeliharaan UPS.')
@section('meta_keywords', 'Shibaazaki, UPS, Rental, Maintenance, Jual UPS, Solutions, Trusted Partner')
@section('content')
    <header class="w-full pt-16 md:pt-[74px] h-[50vh] sm:h-[60vh] lg:h-[70vh] bg-cover bg-no-repeat bg-center relative z-0"
        style="background-image: url('https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <!-- Content Container -->
        <div
            class="container max-w-[1130px] mx-auto px-5 flex flex-col items-center justify-center gap-6 sm:gap-8 lg:gap-[34px] z-10 h-full">

            <!-- Title Section -->
            <div class="flex flex-col gap-2 sm:gap-3 text-center w-fit mt-8 sm:mt-12 lg:mt-20 z-10">
                <h1
                    class="font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-[60px] leading-[130%] text-white px-4">
                    <span class="block sm:inline">Rental, Maintenance &</span><br class="hidden sm:block" />
                    <span class="block sm:inline">Jual Beli UPS</span>
                </h1>
                <p class="text-sm sm:text-base lg:text-lg text-belibang-grey px-4">
                    UPS Terpercaya, Layanan Lengkap, Harga Bersahabat
                </p>
            </div>

            <!-- Search Form Container -->
            <div class="flex w-full justify-center mb-6 sm:mb-8 lg:mb-[34px] z-10 px-4 relative">
                <div class="max-w-[560px] w-full relative">
                    <!-- Search Form -->
                    <form id="searchForm"
                        class="group/search-bar p-3 sm:p-[14px_18px] bg-belibang-darker-grey ring-1 ring-[#414141] hover:ring-[#888888] w-full rounded-full transition-all duration-300">
                        <div class="relative text-left">
                            <!-- Search Icon -->
                            <button type="button" class="absolute inset-y-0 left-0 flex items-center pl-1">
                                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>

                            <!-- Search Input -->
                            <input type="text" id="searchInput" name="q" autocomplete="off"
                                class="bg-transparent w-full pl-8 sm:pl-[36px] pr-10 py-2 focus:outline-none placeholder:text-[#595959] text-white text-sm sm:text-base"
                                placeholder="Cari UPS, brand, kategori..." />

                            <!-- Loading Spinner -->
                            <div id="searchLoader" class="hidden absolute top-1/2 right-10 transform -translate-y-1/2">
                                <svg class="animate-spin h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24">
                                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                        stroke-width="4"></circle>
                                    <path class="opacity-75" fill="currentColor"
                                        d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                                    </path>
                                </svg>
                            </div>

                            <!-- Clear Button -->
                            <button type="button" id="resetButton"
                                class="close-button hidden absolute top-1/2 right-2 transform -translate-y-1/2 w-6 h-6 sm:w-8 sm:h-8 text-gray-400 hover:text-white transition-all duration-300">
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                    </form>

                    <!-- Search Results Dropdown -->
                    <div id="searchResults"
                        class="hidden absolute top-full left-0 w-full mt-2 bg-belibang-darker-grey rounded-lg shadow-xl border border-gray-800 max-h-96 overflow-y-auto z-50">
                        <!-- Results will be populated here -->
                    </div>

                    <!-- Quick Suggestions -->
                    <div id="quickSuggestions"
                        class="hidden absolute top-full left-0 w-full mt-2 bg-belibang-darker-grey rounded-xl shadow-xl border border-gray-800 z-40">
                        <div class="p-4">
                            <p class="text-sm text-gray-500 mb-3">Pencarian populer:</p>
                            <div class="flex flex-wrap gap-2">
                                <button
                                    class="suggestion-btn px-3 py-1 bg-belibang-dark-grey text-gray-300 rounded-full text-sm hover:bg-gray-200 hover:text-gray-800 transition-colors"
                                    data-query="UPS">UPS</button>
                                <button
                                    class="suggestion-btn px-3 py-1 bg-belibang-dark-grey text-gray-300 rounded-full text-sm hover:bg-gray-200 hover:text-gray-800 transition-colors"
                                    data-query="Rental">Rental</button>
                                <button
                                    class="suggestion-btn px-3 py-1 bg-belibang-dark-grey text-gray-300 rounded-full text-sm hover:bg-gray-200 hover:text-gray-800 transition-colors"
                                    data-query="Maintenance">Maintenance</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Overlay Gradient -->
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
    </header>
    <section id="Category" class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 mt-3 px-5">
        <x-heading1>Layanan Terbaik Kami</x-heading1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            @forelse ($categories as $itemCategory)
                <x-card :title="$itemCategory->name" :description="$itemCategory->description" :image="Storage::url($itemCategory->image)" :href="route('front.category.show', $itemCategory->slug)" variant="category"
                    class="category-card-responsive" />
            @empty
                <div class="col-span-full">
                    <x-empty-state title="Tidak ada kategori lainnya" message="Kategori terkait akan muncul di sini." />
                </div>
            @endforelse
        </div>
    </section>
    <section
        class="container max-w-[1230px] mx-auto mb-10 md:mb-0 md:py-16 lg:py-20 flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16 items-center">
            <!-- Content Section -->
            <div class="space-y-4 md:space-y-6 order-2 lg:order-1">
                <!-- Heading -->
                <x-heading2>
                    Tentang Kami
                </x-heading2>

                <!-- Description -->
                <div class="prose prose-base sm:prose-lg max-w-none text-belibang-grey leading-relaxed">
                    <x-paragraph>
                        PT. Shibaazaki adalah perusahaan yang spesialis dalam menyediakan berbagai
                        layanan terkait dengan sistem daya tak terputus (UPS) dan genset. Dengan dedikasi tinggi
                        terhadap keandalan dan ketersediaan daya listrik, perusahaan ini telah menjadi mitra
                        terpercaya bagi berbagai industri yang memerlukan solusi yang handal untuk menjaga
                        kelancaran operasional mereka.
                        </x-paragra>
                </div>

                <!-- Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4 pt-2 md:pt-4">
                    <x-front-button-primary href="{{ route('front.profile.show') }}">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </x-front-button-primary>
                    <x-front-button-seccondary href="https://wa.me/6281318222618">
                        <svg aria-label="WhatsApp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24"
                            height="24" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        Hubungi Kami
                    </x-front-button-seccondary>
                </div>
            </div>

            <!-- Image Section -->
            <div class="relative order-1 lg:order-2">
                <div class="p-[2px] rounded-2xl lg:rounded-3xl bg-img-purple-to-orange shadow-2xl">
                    <div class="bg-img-black-gradient rounded-2xl lg:rounded-3xl p-4 sm:p-6 lg:p-8">
                        <div class="relative overflow-hidden rounded-xl lg:rounded-2xl">
                            <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t39.30808-6/475301182_496416920170422_7602111244084816273_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEvOoo5WowSJWshj6geSxwhIFlJ652DcKwgWUnrnYNwrJx3_-5wDtmftJ1WuVLOsN3TIreCoxHqNxRs5OoBTLkc&_nc_ohc=dwkrzTcLTzoQ7kNvwGeh3VS&_nc_oc=AdkES85hIcwqxP1hxqRahrXYui9NQDGecmggHYMYNfMdVX7nrsVp5qPVOrH5hUegc0A&_nc_zt=23&_nc_ht=scontent.fcgk24-2.fna&_nc_gid=XYZkKOtqKu-xtC8nLyvAyg&oh=00_AfVbqgNbuooBhcf1SVoZAFCPf8S2Qn975gRZSeSJHGB5tA&oe=68AA5D90"
                                alt="PT. Shibaazaki - Sistem UPS dan Genset"
                                class="w-full h-48 sm:h-64 md:h-80 lg:h-96 xl:h-[450px] object-cover transition-transform duration-500 hover:scale-105">
                            <!-- Overlay gradient for better text readability if needed -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 via-transparent to-transparent">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Decorative elements -->
                <div
                    class="absolute -top-4 -right-4 w-24 h-24 bg-gradient-to-r from-blue-400 to-green-400 rounded-full opacity-20 blur-xl">
                </div>
                <div
                    class="absolute -bottom-6 -left-6 w-32 h-32 bg-gradient-to-r from-purple-400 to-orange-400 rounded-full opacity-15 blur-xl">
                </div>
            </div>
        </div>
    </section>
    <section class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-5">
        <x-heading1>
            Pencapaian Kami👏
        </x-heading1>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
            <!-- Card 1 -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-6 sm:p-8 text-center h-full transition-all duration-300">
                    <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-blue-400 mb-2">1000+</div>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg text-belibang-grey">Klien Terpuaskan</p>
                </div>
            </div>

            <!-- Card 2 -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-6 sm:p-8 text-center h-full transition-all duration-300">
                    <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-green-400 mb-2">10+</div>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg text-belibang-grey">Tahun Pengalaman</p>
                </div>
            </div>

            <!-- Card 3 -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-6 sm:p-8 text-center h-full transition-all duration-300">
                    <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-blue-400 mb-2">24/7</div>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg text-belibang-grey">Layanan Support</p>
                </div>
            </div>

            <!-- Card 4 -->
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-6 sm:p-8 text-center h-full transition-all duration-300">
                    <div class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-green-400 mb-2">50+</div>
                    <p class="text-xs sm:text-sm md:text-base lg:text-lg text-belibang-grey">Brand Partner</p>
                </div>
            </div>
        </div>
    </section>
    <section class="container max-w-[1230px] mx-auto mb-16 sm:mb-20 lg:mb-[102px] flex flex-col gap-6 sm:gap-8 px-5">
        <!-- Header -->
        <x-heading1>
            Nilai-Nilai Kami⭐
        </x-heading1>

        <!-- Values Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 sm:gap-6 lg:gap-8">
            <!-- Reliability Card -->
            <div
                class="p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300 group">
                <div
                    class="bg-img-black-gradient rounded-2xl p-4 sm:p-6 lg:p-8 h-full group-active:bg-img-black transition-all duration-300">
                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-white rounded-full flex items-center justify-center mb-4 sm:mb-5 lg:mb-6">
                        <svg viewBox="0 0 24 24" class="h-6 w-6 sm:h-8 sm:w-8 lg:h-10 lg:w-10" fill="none"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg"
                            version="1.1" xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:dc="http://purl.org/dc/elements/1.1/" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g transform="translate(0 -1028.4)">
                                    <path d="m3 1031.4v10c0 4.2 3.6322 8 9 10 5.368-2 9-5.8 9-10v-10h-18z" fill="#95a5a6">
                                    </path>
                                    <path d="m3 1030.4v10c0 4.2 3.6322 8 9 10 5.368-2 9-5.8 9-10v-10h-18z" fill="#ecf0f1">
                                    </path>
                                    <path d="m3 1030.4v10c0 4.2 3.6322 8 9 10v-20h-9z" fill="#bdc3c7"></path>
                                    <path d="m5 1032.4v8c0 3.4 2.8251 6.4 7 8 4.175-1.6 7-4.6 7-8v-8h-14z" fill="#27ae60">
                                    </path>
                                    <path d="m12 1032.4v16c4.175-1.6 7-4.6 7-8v-8h-7z" fill="#2ecc71"></path>
                                    <path
                                        d="m16 1037.4-4.683 4.6-1.9511-1.9-1.6586 1.7 1.9512 1.9 1.5615 1.6 0.097 0.1 6.342-6.4-1.659-1.6z"
                                        fill="#27ae60"></path>
                                    <path
                                        d="m16 1036.4-4.683 4.6-1.9511-1.9-1.6586 1.7 1.9512 1.9 1.5615 1.6 0.097 0.1 6.342-6.4-1.659-1.6z"
                                        fill="#ecf0f1"></path>
                                </g>
                            </g>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg sm:text-xl lg:text-xl mb-3 sm:mb-4 text-white">Reliability</h3>
                    <p class="text-belibang-grey text-sm sm:text-base lg:text-base leading-relaxed">
                        Keandalan produk dan layanan adalah prioritas utama kami dalam setiap solusi yang diberikan.
                    </p>
                </div>
            </div>

            <!-- Innovation Card -->
            <div
                class="p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300 group">
                <div
                    class="bg-img-black-gradient rounded-2xl p-4 sm:p-6 lg:p-8 h-full group-active:bg-img-black transition-all duration-300">
                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-white rounded-full flex items-center justify-center mb-4 sm:mb-5 lg:mb-6">
                        <svg height="200px" class="h-6 w-6 sm:h-8 sm:w-8 lg:w-10 lg:h-10" width="200px" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <polygon style="fill:#A0BF7C;" points="345.6,499.2 345.6,166.4 448,64 448,499.2 ">
                                </polygon>
                                <polygon style="fill:#B3CC96;" points="243.2,499.2 243.2,268.8 345.6,166.4 345.6,499.2 ">
                                </polygon>
                                <polygon style="fill:#D9E5CB;" points="12.8,499.2 140.8,371.2 140.8,499.2 "></polygon>
                                <polygon style="fill:#C6D9B0;" points="140.8,499.2 140.8,371.2 243.2,268.8 243.2,499.2 ">
                                </polygon>
                                <path style="fill:#573A32;"
                                    d="M499.2,102.4c7.074,0,12.8-5.726,12.8-12.8V12.8C512,5.726,506.274,0,499.2,0h-76.8 c-7.074,0-12.8,5.726-12.8,12.8s5.726,12.8,12.8,12.8h45.901L438.98,54.921c-0.026,0.026-0.043,0.043-0.068,0.068L3.755,490.138 c-1.195,1.186-2.142,2.611-2.79,4.198c-0.026,0.06-0.034,0.128-0.06,0.196C0.341,495.983,0,497.545,0,499.2 c0,1.655,0.341,3.217,0.913,4.668c0.026,0.068,0.034,0.128,0.06,0.196c1.297,3.157,3.814,5.666,6.972,6.972 c0.06,0.026,0.128,0.034,0.196,0.06C9.583,511.659,11.145,512,12.8,512h486.4c7.066,0,12.8-5.726,12.8-12.8 c0-7.074-5.734-12.8-12.8-12.8h-38.4V69.299l25.6-25.6V89.6C486.4,96.674,492.126,102.4,499.2,102.4z M153.6,376.499l76.8-76.8 V486.4h-76.8V376.499z M128,486.4H43.699L128,402.099V486.4z M256,274.099l76.8-76.8V486.4H256V274.099z M435.2,486.4h-76.8V171.699 l76.8-76.8V486.4z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg sm:text-xl lg:text-xl mb-3 sm:mb-4 text-white">Innovation</h3>
                    <p class="text-belibang-grey text-sm sm:text-base lg:text-base leading-relaxed">
                        Selalu mengikuti perkembangan teknologi terbaru untuk memberikan solusi terdepan kepada klien.
                    </p>
                </div>
            </div>

            <!-- Customer Focus Card -->
            <div
                class="p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300 group sm:col-span-2 lg:col-span-1">
                <div
                    class="bg-img-black-gradient rounded-2xl p-4 sm:p-6 lg:p-8 h-full group-active:bg-img-black transition-all duration-300">
                    <div
                        class="w-12 h-12 sm:w-14 sm:h-14 lg:w-16 lg:h-16 bg-white rounded-full flex items-center justify-center mb-4 sm:mb-5 lg:mb-6">
                        <svg height="200px" width="200px" class="h-6 w-6 sm:h-8 sm:w-8 lg:w-10 lg:h-10" version="1.1"
                            id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512.002 512.002" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path style="fill:#FF9269;"
                                    d="M256.804,8.174v149.243c41.245,0,74.621-33.376,74.621-74.621S298.051,8.174,256.804,8.174z">
                                </path>
                                <path style="fill:#FFB082;"
                                    d="M256.804,8.174c-41.245,0-74.621,33.376-74.621,74.621s33.376,74.621,74.621,74.621 c28.238,0,51.089-33.376,51.089-74.621S285.043,8.174,256.804,8.174z">
                                </path>
                                <path style="fill:#C20035;"
                                    d="M256.001,185.742v131.311h131.311C387.312,244.533,328.522,185.742,256.001,185.742z">
                                </path>
                                <path style="fill:#FF0F47;"
                                    d="M256.001,185.742c-72.521,0-131.311,58.79-131.311,131.311h229.941 C354.632,244.531,310.474,185.742,256.001,185.742z">
                                </path>
                                <polygon style="fill:#F3A933;"
                                    points="327.717,419.521 293.021,454.849 300.32,503.827 255.994,481.756 240.743,429.209 255.994,367.417 278.881,411.329 ">
                                </polygon>
                                <polygon style="fill:#FFBE35;"
                                    points="255.994,367.417 255.994,481.756 211.679,503.827 218.966,454.849 184.281,419.521 233.117,411.329 ">
                                </polygon>
                                <polygon style="fill:#F3A933;"
                                    points="503.831,419.521 469.135,454.849 476.434,503.827 432.108,481.756 416.857,429.209 432.108,367.417 454.995,411.329 ">
                                </polygon>
                                <polygon style="fill:#FFBE35;"
                                    points="432.108,367.417 432.108,481.756 387.792,503.827 395.08,454.849 360.395,419.521 409.231,411.329 ">
                                </polygon>
                                <polygon style="fill:#F3A933;"
                                    points="151.608,419.521 116.912,454.849 124.21,503.827 79.884,481.756 64.633,429.209 79.884,367.417 102.772,411.329 ">
                                </polygon>
                                <polygon style="fill:#FFBE35;"
                                    points="79.884,367.417 79.884,481.756 35.569,503.827 42.857,454.849 8.172,419.521 57.008,411.329 ">
                                </polygon>
                                <path
                                    d="M256.001,161.236c44.452,0,80.617-36.165,80.617-80.618C336.618,36.165,300.454,0,256.001,0s-80.617,36.165-80.617,80.617 C175.384,125.071,211.549,161.236,256.001,161.236z M256.001,16.341c35.442,0,64.277,28.834,64.277,64.277 s-28.834,64.278-64.277,64.278s-64.277-28.835-64.277-64.278S220.559,16.341,256.001,16.341z">
                                </path>
                                <path
                                    d="M256.001,193.916c65.156,0,118.655,50.862,122.872,114.97H190.051c-4.512,0-8.17,3.657-8.17,8.17 c0,4.512,3.658,8.17,8.17,8.17h197.262c4.512,0,8.17-3.658,8.17-8.17c0-76.91-62.572-139.481-139.482-139.481 S116.52,240.148,116.52,317.057c0,4.512,3.658,8.17,8.17,8.17h32.681c4.512,0,8.17-3.658,8.17-8.17c0-4.513-3.658-8.17-8.17-8.17 h-24.243C137.346,244.779,190.846,193.916,256.001,193.916z">
                                </path>
                                <path
                                    d="M152.956,411.465l-44.82-7.522l-21.004-40.301c-1.407-2.701-4.199-4.394-7.245-4.394c-3.045,0-5.838,1.694-7.245,4.394 l-21.004,40.301l-44.82,7.522c-3.003,0.504-5.477,2.636-6.419,5.533c-0.941,2.896-0.193,6.075,1.94,8.248l31.839,32.43l-6.696,44.95 c-0.449,3.013,0.815,6.024,3.279,7.814c2.462,1.79,5.717,2.061,8.445,0.704l40.681-20.259l40.681,20.259 c1.153,0.573,2.4,0.856,3.641,0.856c1.696,0,3.381-0.527,4.803-1.561c2.464-1.79,3.728-4.801,3.279-7.814l-6.696-44.95l31.839-32.43 c2.133-2.172,2.881-5.352,1.94-8.248C158.434,414.101,155.96,411.97,152.956,411.465z M111.085,449.132 c-1.794,1.828-2.629,4.392-2.251,6.927l4.986,33.468l-30.29-15.084c-2.293-1.143-4.99-1.143-7.285,0l-30.291,15.084l4.986-33.468 c0.378-2.535-0.455-5.1-2.251-6.927l-23.707-24.147l33.372-5.602c2.527-0.425,4.709-2.01,5.893-4.282l15.639-30.008l15.639,30.008 c1.184,2.272,3.366,3.857,5.893,4.282l33.372,5.602L111.085,449.132z">
                                </path>
                                <path
                                    d="M329.07,411.465l-44.82-7.522l-21.004-40.301c-1.407-2.701-4.199-4.394-7.245-4.394c-3.045,0-5.838,1.694-7.245,4.394 l-21.004,40.301l-44.82,7.522c-3.003,0.504-5.477,2.636-6.419,5.533c-0.941,2.896-0.193,6.075,1.94,8.248l31.839,32.43l-6.695,44.95 c-0.449,3.013,0.815,6.024,3.279,7.814c2.462,1.79,5.718,2.061,8.444,0.704l40.681-20.259l40.681,20.259 c1.153,0.573,2.4,0.856,3.641,0.856c1.696,0,3.381-0.527,4.803-1.561c2.464-1.79,3.728-4.801,3.279-7.814l-6.696-44.95l31.839-32.43 c2.133-2.172,2.881-5.352,1.94-8.248C334.548,414.101,332.074,411.97,329.07,411.465z M287.199,449.132 c-1.795,1.828-2.629,4.392-2.251,6.927l4.985,33.468l-30.29-15.084c-1.147-0.571-2.394-0.856-3.642-0.856 c-1.247,0-2.495,0.285-3.642,0.856l-30.29,15.084l4.985-33.468c0.378-2.535-0.455-5.1-2.251-6.927l-23.707-24.147l33.372-5.602 c2.527-0.425,4.709-2.01,5.893-4.282l15.639-30.006l15.639,30.008c1.184,2.272,3.366,3.857,5.893,4.282l33.371,5.602 L287.199,449.132z">
                                </path>
                                <path
                                    d="M511.602,416.998c-0.941-2.897-3.414-5.028-6.419-5.533l-44.82-7.522l-21.004-40.301c-1.407-2.701-4.199-4.395-7.245-4.395 s-5.838,1.694-7.245,4.395l-21.004,40.301l-44.82,7.522c-3.003,0.504-5.477,2.636-6.419,5.533c-0.941,2.896-0.193,6.075,1.94,8.248 l31.839,32.43l-6.696,44.95c-0.449,3.013,0.815,6.024,3.279,7.814c1.422,1.034,3.107,1.561,4.803,1.561 c1.242,0,2.489-0.283,3.641-0.856l40.681-20.259l40.681,20.259c2.727,1.356,5.981,1.084,8.444-0.704 c2.464-1.79,3.728-4.801,3.279-7.814l-6.696-44.95l31.839-32.43C511.794,423.073,512.543,419.894,511.602,416.998z M463.312,449.132 c-1.795,1.828-2.629,4.392-2.251,6.927l4.986,33.468l-30.291-15.084c-1.147-0.571-2.394-0.856-3.642-0.856 c-1.248,0-2.495,0.285-3.642,0.856l-30.29,15.084l4.986-33.468c0.378-2.535-0.455-5.1-2.251-6.927l-23.707-24.147l33.372-5.602 c2.527-0.425,4.709-2.01,5.893-4.282l15.639-30.008l15.639,30.008c1.184,2.272,3.366,3.857,5.893,4.282l33.371,5.602 L463.312,449.132z">
                                </path>
                                <path
                                    d="M256.001,117.661c10.71,0,20.898-4.654,27.953-12.768c2.96-3.405,2.6-8.566-0.805-11.527 c-3.406-2.961-8.567-2.6-11.527,0.805c-3.949,4.544-9.644,7.149-15.621,7.149s-11.671-2.606-15.621-7.149 c-2.961-3.405-8.121-3.765-11.527-0.805c-3.405,2.961-3.765,8.121-0.805,11.527C235.103,113.006,245.292,117.661,256.001,117.661z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="font-bold text-lg sm:text-xl lg:text-xl mb-3 sm:mb-4 text-white">Customer Focus</h3>
                    <p class="text-belibang-grey text-sm sm:text-base lg:text-base leading-relaxed">
                        Kepuasan pelanggan adalah misi kami, dengan layanan personal dan support yang responsif.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section id="NewProduct"
        class="container max-w-[1230px] mx-auto mb-16 md:mb-24 lg:mb-[102px] flex flex-col gap-6 md:gap-8 px-5">
        <!-- Responsive Heading -->
        <x-heading1>
            Produk UPS Kami💯
        </x-heading1>

        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6 lg:gap-[22px]">
            @forelse ($upsBrands as $item)
                <!-- Product Card -->
                <div class="product-card flex flex-col rounded-xl md:rounded-[18px] bg-[#181818] overflow-hidden">
                    <a href="{{ route('front.ups-brands.show', $item->slug) }}"
                        class="thumbnail w-full h-[160px] sm:h-[170px] md:h-[180px] lg:h-[180px] flex shrink-0 overflow-hidden relative">
                        <img src="{{ Storage::url($item->image) }}" class="w-full h-full object-cover"
                            alt="{{ $item->name }}" />
                    </a>
                    <div class="p-3 sm:p-4 md:p-[10px_14px_12px] h-full flex flex-col justify-between gap-3 md:gap-[14px]">
                        <div class="flex flex-col gap-1">
                            <a href="{{ route('front.ups-brands.show', $item->slug) }}"
                                class="font-bold text-base sm:text-lg md:text-xl lg:text-2xl mb-2 leading-snug line-clamp-2">
                                {{ $item->name }}
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <x-empty-state>
                    <x-slot name="title">Produk tidak ditemukan</x-slot>
                    <x-slot name="description">Kami tidak dapat menemukan produk UPS yang Anda cari.</x-slot>
                </x-empty-state>
            @endforelse
        </div>
        <!-- Load More Button -->
        <div class="text-center mt-12">
            <a href="{{ route('front.ups-brands.index') }}"
                class="inline-flex items-center gap-2 px-8 py-3 
               bg-gradient-to-r from-gray-800 to-gray-900 
               border border-gray-600/50 rounded-full 
               text-white font-medium text-base
               shadow-lg shadow-gray-900/25
               hover:from-gray-700 hover:to-gray-800 
               hover:border-gray-500 hover:shadow-xl hover:shadow-gray-900/30
               hover:-translate-y-0.5
               transition-all duration-300 ease-out
               backdrop-blur-sm">
                Lihat Selengkapnya
                <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none"
                    stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    </section>
    <!-- Values Section -->
    <section class="container max-w-[1230px] mx-auto mb-16 sm:mb-20 lg:mb-[102px] flex flex-col gap-6 sm:gap-8 px-5">
        <!-- Header -->
        <x-heading1>
            Manfaat Menggunakan UPS
        </x-heading1>

        <!-- Values Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-3">
            <!-- Card -->
            <div class="p-[1px] rounded-2xl hover:bg-img-purple-to-orange  transition-all duration-300 group">
                <div
                    class="bg-belibang-darker-grey rounded-2xl p-6 h-full group-hover:from-gray-700 group-hover:to-gray-800 transition-all duration-300">
                    <div class="flex flex-col items-center text-center">
                        <!-- Image Container -->
                        <div class="w-full h-48 bg-white rounded-xl flex items-center justify-center mb-6 overflow-hidden">
                            <img src="{{ asset('assets/images/photos/panggung.jpg') }}" alt="UPS untuk Acara Event"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Content -->
                        <h3 class="font-bold text-xl mb-4 text-white">Acara Event</h3>
                    </div>
                </div>
            </div>
            <div class="p-[1px] rounded-2xl hover:bg-img-purple-to-orange  transition-all duration-300 group">
                <div
                    class="bg-belibang-darker-grey rounded-2xl p-6 h-full group-hover:from-gray-700 group-hover:to-gray-800 transition-all duration-300">
                    <div class="flex flex-col items-center text-center">
                        <!-- Image Container -->
                        <div class="w-full h-48 bg-white rounded-xl flex items-center justify-center mb-6 overflow-hidden">
                            <img src="{{ asset('assets/images/photos/medis.jpg') }}"
                                alt="UPS untuk Keperluan Peralatan Medis" class="w-full h-full object-cover">
                        </div>

                        <!-- Content -->
                        <h3 class="font-bold text-xl mb-4 text-white">Keperluan Peralatan Medis</h3>
                    </div>
                </div>
            </div>
            <div class="p-[1px] rounded-2xl hover:bg-img-purple-to-orange  transition-all duration-300 group">
                <div
                    class="bg-belibang-darker-grey rounded-2xl p-6 h-full group-hover:from-gray-700 group-hover:to-gray-800 transition-all duration-300">
                    <div class="flex flex-col items-center text-center">
                        <!-- Image Container -->
                        <div class="w-full h-48 bg-white rounded-xl flex items-center justify-center mb-6 overflow-hidden">
                            <img src="{{ asset('assets/images/photos/konstruksi.png') }}"
                                alt="UPS untuk Kegiatan Proyek Konstruksi dan Renovasi"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Content -->
                        <h3 class="font-bold text-xl mb-4 text-white">Kegiatan Proyek Konstruksi dan Renovasi</h3>
                    </div>
                </div>
            </div>
            <div class="p-[1px] rounded-2xl hover:bg-img-purple-to-orange  transition-all duration-300 group">
                <div
                    class="bg-belibang-darker-grey rounded-2xl p-6 h-full group-hover:from-gray-700 group-hover:to-gray-800 transition-all duration-300">
                    <div class="flex flex-col items-center text-center">
                        <!-- Image Container -->
                        <div class="w-full h-48 bg-white rounded-xl flex items-center justify-center mb-6 overflow-hidden">
                            <img src="{{ asset('assets/images/photos/server_PNG43.png') }}"
                                alt="UPS untuk Keperluan Data Center, Office, dan Industry"
                                class="w-full h-full object-cover">
                        </div>

                        <!-- Content -->
                        <h3 class="font-bold text-xl mb-4 text-white">Keperluan Data Center, Office, dan Industry</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="Tool" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1230px] mx-auto px-5">
            <x-heading1>Partner Kami 👨‍💻</x-heading1>
        </div>
        <div class="tools-logos w-full overflow-hidden flex flex-col gap-5">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    @forelse ($partners as $item)
                        <a href=""
                            class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                            <div
                                class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                                <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                    <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                        class="w-full h-full object-contain" alt="logo" />
                                </div>
                                <div class="flex flex-col justify-center gap-1">
                                    <p class="font-bold text-lg">PT Indofood Tbk</p>
                                    <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                        Produsen makanan terbesar
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <x-empty-state title="Tidak ada data partner" message="Data akan segera tersedia disini." />
                    @endforelse
                </div>
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    @forelse ($partners as $item)
                        <a href=""
                            class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                            <div
                                class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                                <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                    <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                        class="w-full h-full object-contain" alt="logo" />
                                </div>
                                <div class="flex flex-col justify-center gap-1">
                                    <p class="font-bold text-lg">PT Indofood Tbk</p>
                                    <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                        Produsen makanan terbesar
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <x-empty-state title="Tidak ada data partner" message="Data akan segera tersedia disini." />
                    @endforelse
                </div>
            </div>
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    @forelse ($partners as $item)
                        <a href=""
                            class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                            <div
                                class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                                <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                    <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                        class="w-full h-full object-contain" alt="logo" />
                                </div>
                                <div class="flex flex-col justify-center gap-1">
                                    <p class="font-bold text-lg">PT Indofood Tbk</p>
                                    <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                        Produsen makanan terbesar
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <x-empty-state title="Tidak ada data partner" message="Data akan segera tersedia disini." />
                    @endforelse
                </div>
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
                    @forelse ($partners as $item)
                        <a href=""
                            class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                            <div
                                class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                                <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                    <img src="{{ asset('assets/images/logos/indofood.png') }}"
                                        class="w-full h-full object-contain" alt="logo" />
                                </div>
                                <div class="flex flex-col justify-center gap-1">
                                    <p class="font-bold text-lg">PT Indofood Tbk</p>
                                    <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                        Produsen makanan terbesar
                                    </p>
                                </div>
                            </div>
                        </a>
                    @empty
                        <x-empty-state title="Tidak ada data partner" message="Data akan segera tersedia disini." />
                    @endforelse
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const searchForm = document.getElementById('searchForm');
            const resetButton = document.getElementById('resetButton');
            const searchResults = document.getElementById('searchResults');
            const quickSuggestions = document.getElementById('quickSuggestions');
            const searchLoader = document.getElementById('searchLoader');

            let searchTimeout;
            let isSearching = false;

            // Show quick suggestions on focus
            searchInput.addEventListener('focus', function() {
                if (this.value.length === 0) {
                    quickSuggestions.classList.remove('hidden');
                    searchResults.classList.add('hidden');
                }
            });

            // Hide dropdowns when clicking outside
            document.addEventListener('click', function(e) {
                if (!e.target.closest('.relative')) {
                    searchResults.classList.add('hidden');
                    quickSuggestions.classList.add('hidden');
                }
            });

            // Handle input search
            searchInput.addEventListener('input', function() {
                const query = this.value.trim();

                // Show/hide clear button
                if (query.length > 0) {
                    resetButton.classList.remove('hidden');
                    quickSuggestions.classList.add('hidden');
                } else {
                    resetButton.classList.add('hidden');
                    searchResults.classList.add('hidden');
                    quickSuggestions.classList.remove('hidden');
                    return;
                }

                // Clear previous timeout
                clearTimeout(searchTimeout);

                // Set new timeout for search
                searchTimeout = setTimeout(() => {
                    performSearch(query);
                }, 300); // Delay 300ms untuk mengurangi request
            });

            // Handle form submission
            searchForm.addEventListener('submit', function(e) {
                e.preventDefault();
                const query = searchInput.value.trim();
                if (query.length > 0) {
                    // Redirect ke halaman hasil pencarian lengkap
                    window.location.href = `{{ route('search') }}?q=${encodeURIComponent(query)}`;
                }
            });

            // Clear search
            resetButton.addEventListener('click', function() {
                searchInput.value = '';
                resetButton.classList.add('hidden');
                searchResults.classList.add('hidden');
                quickSuggestions.classList.remove('hidden');
                searchInput.focus();
            });

            // Handle suggestion clicks
            document.querySelectorAll('.suggestion-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    const query = this.dataset.query;
                    searchInput.value = query;
                    performSearch(query);
                });
            });

            // Perform search function
            function performSearch(query) {
                if (query.length < 2) return;

                isSearching = true;
                searchLoader.classList.remove('hidden');

                fetch(`{{ route('search') }}?q=${encodeURIComponent(query)}&limit=8`, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        displaySearchResults(data);
                    })
                    .catch(error => {
                        console.error('Search error:', error);
                        displayError();
                    })
                    .finally(() => {
                        isSearching = false;
                        searchLoader.classList.add('hidden');
                    });
            }

            // Display search results
            function displaySearchResults(response) {
                const results = response.data || [];

                if (results.length === 0) {
                    searchResults.innerHTML = `
                        <div class="p-4 text-center text-gray-500">
                            <p>Tidak ada hasil untuk "${response.query}"</p>
                            <p class="text-sm mt-1">Coba gunakan kata kunci lain</p>
                        </div>
                    `;
                } else {
                    let html = '';

                    results.forEach(item => {
                        html += `
                            <a href="${item.url}" class="block p-4 hover:bg-gray-800 border-b border-gray-100 last:border-b-0">
                                <div class="flex items-start gap-3">
                                    <div class="flex-1 min-w-0">
                                        <div class="flex items-center gap-2 mb-1">
                                            <h4 class="font-medium text-gray-200 truncate">${item.title}</h4>
                                            <span class="inline-flex items-center px-2 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">${item.badge}</span>
                                        </div>
                                        ${item.subtitle ? `<p class="text-sm text-gray-400 mb-1">${item.subtitle}</p>` : ''}
                                        ${item.description ? `<p class="text-sm text-gray-500 line-clamp-2">${item.description}</p>` : ''}
                                        ${item.price ? `<p class="text-sm font-medium text-green-600 mt-1">Rp ${new Intl.NumberFormat('id-ID').format(item.price)}</p>` : ''}
                                    </div>
                                </div>
                            </a>
                        `;
                    });

                    searchResults.innerHTML = html;
                }

                searchResults.classList.remove('hidden');
                quickSuggestions.classList.add('hidden');
            }

            // Display error
            function displayError() {
                searchResults.innerHTML = `
                    <div class="p-4 text-center text-red-500">
                        <p>Terjadi kesalahan saat mencari</p>
                        <p class="text-sm mt-1">Silakan coba lagi</p>
                    </div>
                `;
                searchResults.classList.remove('hidden');
            }

            // Handle keyboard navigation
            searchInput.addEventListener('keydown', function(e) {
                const resultLinks = searchResults.querySelectorAll('a');

                if (e.key === 'Escape') {
                    searchResults.classList.add('hidden');
                    quickSuggestions.classList.add('hidden');
                    this.blur();
                }

                if (e.key === 'ArrowDown' && resultLinks.length > 0) {
                    e.preventDefault();
                    resultLinks[0].focus();
                }
            });
        });
    </script>
@endsection
