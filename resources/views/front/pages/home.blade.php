@extends('layouts.template')
@section('title', 'Home - Shibaazaki')
@section('meta_title', 'PT Shibaazaki')
@section('meta_description',
    'PT Shibaazaki. Your Trusted UPS Solutions Partner. We’re working hard to launch a new and
    improved website. Stay tuned to explore PT Shibaazaki’s reliable and innovative solutions for UPS provision, rental, and
    maintenance.')
@section('meta_keywords', 'Shibaazaki, UPS, Rental, Maintenance, Jual Beli, Solutions, Trusted Partner')
@section('content')
    <header class="w-full pt-16 md:pt-[74px] h-[50vh] sm:h-[60vh] lg:h-[70vh] bg-cover bg-no-repeat bg-center relative z-0"
        style="background-image: url('https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <!-- Content Container -->
        <div
            class="container max-w-[1130px] mx-auto px-5 flex flex-col items-center justify-center gap-6 sm:gap-8 lg:gap-[34px] z-10 h-full">

            <!-- Title Section -->
            <div class="flex flex-col gap-2 sm:gap-3 text-center w-fit mt-8 sm:mt-12 lg:mt-20 z-10">
                {{-- badge --}}
                <h1
                    class="font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-[60px] leading-[130%] text-white px-4">
                    <span class="block sm:inline">Rental, Maintenance &</span><br class="hidden sm:block" />
                    <span class="block sm:inline">Jual Beli UPS</span>
                </h1>
                <p class="text-sm sm:text-base lg:text-lg text-belibang-grey px-4">
                    UPS Terpercaya, Layanan Lengkap, Harga Bersahabat
                </p>
            </div>

            <!-- Search Form -->
            <div class="flex w-full justify-center mb-6 sm:mb-8 lg:mb-[34px] z-10 px-4">
                <form
                    class="group/search-bar p-3 sm:p-[14px_18px] bg-belibang-darker-grey ring-1 ring-[#414141] hover:ring-[#888888] max-w-[560px] w-full rounded-full transition-all duration-300">
                    <div class="relative text-left">
                        <!-- Search Icon -->
                        <button type="button" class="absolute inset-y-0 left-0 flex items-center pl-1">
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </button>

                        <!-- Search Input -->
                        <input type="text" id="searchInput"
                            class="bg-transparent w-full pl-8 sm:pl-[36px] pr-10 py-2 focus:outline-none placeholder:text-[#595959] text-white text-sm sm:text-base"
                            placeholder="Type anything to search..." />

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
            </div>
        </div>

        <!-- Overlay Gradient -->
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
    </header>

    <section id="Category" class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 mt-3 px-5">
        <x-heading1>Layanan Terbaik Kami👩‍💻</x-heading1>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
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
                <x-heading1>
                    Tentang Kami
                </x-heading1>

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
                    <x-front-button-primary href="">
                        <span>Selengkapnya</span>
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </x-front-button-primary>
                    <x-front-button-seccondary href="about.html">
                        <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                            </path>
                        </svg>
                        <span class="text-belibang-grey">Hubungi Kami</span>
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

    <!-- Statistics Section -->
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

    <!-- Values Section -->
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
                <p class="text-gray-600">No products found.</p>
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



    <section class="container max-w-[1230px] mx-auto px-5 mb-16">
        <!-- Judul Section -->
        <x-heading1>
            Blog Artikel📖
        </x-heading1>

        {{-- Implementasi Carousel untuk Grid Artikel --}}

        @if ($posts->count() > 0)
            {{-- Desktop: Grid Layout (hidden on mobile) --}}
            <div class="hidden md:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mt-5">
                @foreach ($posts as $item)
                    <x-card :title="Str::limit($item->title, 50)" :description="Str::limit($item->content, 120)" :image="Storage::url($item->thumbnail)" :href="route('front.post.show', $item->slug)" variant="product"
                        image-position="top">
                        <div class="flex items-center justify-between text-sm text-gray-500 mt-3">
                            <span>{{ $item->author->name }}</span>
                            <span>{{ $item->published_at->format('M d, Y') }}</span>
                        </div>
                    </x-card>
                @endforeach
            </div>

            {{-- Mobile: Carousel Layout --}}
            <div class="block md:hidden mt-5" x-data="{
                currentSlide: 0,
                totalSlides: {{ $posts->count() }},
                autoPlay: true,
                autoPlayInterval: 5000,
                itemsPerView: 1,
                init() {
                    if (this.autoPlay && this.totalSlides > 1) {
                        setInterval(() => {
                            this.nextSlide();
                        }, this.autoPlayInterval);
                    }
                },
                nextSlide() {
                    this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
                },
                prevSlide() {
                    this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
                },
                goToSlide(index) {
                    this.currentSlide = index;
                }
            }">

                <!-- Carousel Container -->
                <div class="relative overflow-hidden rounded-2xl">
                    <!-- Slides Container -->
                    <div class="flex transition-transform duration-500 ease-in-out"
                        x-bind:style="`transform: translateX(-${currentSlide * 100}%)`">
                        @foreach ($posts as $index => $item)
                            <div class="w-full flex-shrink-0 px-3">
                                <div
                                    class="group block w-full h-fit rounded-2xl transition-all duration-300 p-[1px] bg-img-transparent hover:bg-img-purple-to-orange">
                                    <div
                                        class="flex flex-col rounded-2xl w-full bg-belibang-darker-grey transition-all duration-300 p-5 space-y-4">

                                        <!-- Article Image -->
                                        @if ($item->thumbnail)
                                            <div class="w-full h-48 overflow-hidden rounded-lg">
                                                <img src="{{ Storage::url($item->thumbnail) }}" alt="{{ $item->title }}"
                                                    class="w-full h-full object-cover transition-transform duration-300 group-hover:scale-105" />
                                            </div>
                                        @endif

                                        <!-- Article Content -->
                                        <div class="flex flex-col space-y-3">
                                            <h3 class="font-bold text-lg text-white line-clamp-1">
                                                {{ Str::limit($item->title, 60) }}
                                            </h3>

                                            <div class="text-sm text-gray-400 line-clamp-2">
                                                {!! Str::limit($item->content, 150) !!}
                                            </div>

                                            <!-- Article Meta -->
                                            <div
                                                class="flex items-center justify-between text-sm text-gray-500 pt-2 border-t border-gray-700">
                                                <span>{{ $item->author->name }}</span>
                                                <span>{{ $item->published_at->format('M d, Y') }}</span>
                                            </div>

                                            <!-- Read More Button -->
                                            <div class="mt-4">
                                                <a href="{{ route('front.post.show', $item->slug) }}"
                                                    class="inline-flex w-full justify-center items-center px-4 py-2 rounded-full font-medium text-sm transition-all duration-300 bg-gradient-to-r from-blue-500 to-green-500 text-white hover:from-blue-600 hover:to-green-600 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                                                    Baca Selengkapnya
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <!-- Navigation Controls (only show if more than 1 item) -->
                @if ($posts->count() > 1)
                    <div class="flex justify-between items-center mt-6 px-4">
                        <!-- Previous Button -->
                        <button @click="prevSlide()"
                            class="p-3 rounded-full bg-gray-800 hover:bg-gray-700 text-white transition-colors duration-200 shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>

                        <!-- Dots Indicator -->
                        <div class="flex space-x-2">
                            @foreach ($posts as $index => $item)
                                <button @click="goToSlide({{ $index }})"
                                    class="w-2 h-2 rounded-full transition-all duration-200"
                                    :class="currentSlide === {{ $index }} ? 'bg-blue-500 w-6' : 'bg-gray-500'">
                                </button>
                            @endforeach
                        </div>

                        <!-- Next Button -->
                        <button @click="nextSlide()"
                            class="p-3 rounded-full bg-gray-800 hover:bg-gray-700 text-white transition-colors duration-200 shadow-lg">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </button>
                    </div>
                @endif

                <!-- Touch Support for Swipe -->
                <div x-data="{
                    startX: 0,
                    currentX: 0,
                    isDragging: false,
                    threshold: 50,
                    handleTouchStart(e) {
                        this.startX = e.touches[0].clientX;
                        this.isDragging = true;
                    },
                    handleTouchMove(e) {
                        if (!this.isDragging) return;
                        this.currentX = e.touches[0].clientX;
                        e.preventDefault(); // Prevent scrolling
                    },
                    handleTouchEnd() {
                        if (!this.isDragging) return;
                        const diff = this.startX - this.currentX;
                
                        if (Math.abs(diff) > this.threshold) {
                            if (diff > 0) {
                                $dispatch('next-slide');
                            } else {
                                $dispatch('prev-slide');
                            }
                        }
                
                        this.isDragging = false;
                    }
                }" @touchstart.passive="handleTouchStart" @touchmove="handleTouchMove"
                    @touchend="handleTouchEnd" @next-slide="nextSlide()" @prev-slide="prevSlide()"
                    class="absolute inset-0 z-10">
                </div>
            </div>
        @else
            {{-- Empty State --}}
            <div class="mt-5">
                <x-empty-state message="Artikel akan muncul di sini." />
            </div>
        @endif

        {{-- Keyboard Navigation (Optional Enhancement) --}}
        <script>
            document.addEventListener('keydown', function(e) {
                if (window.innerWidth < 768) { // Only on mobile
                    const carousel = document.querySelector('[x-data*="currentSlide"]');
                    if (carousel && carousel.__x) {
                        if (e.key === 'ArrowLeft') {
                            carousel.__x.$data.prevSlide();
                        } else if (e.key === 'ArrowRight') {
                            carousel.__x.$data.nextSlide();
                        }
                    }
                }
            });
        </script>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <a href="{{ route('front.post.index') }}"
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

    <section id="Tool" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1230px] mx-auto px-5">
            <x-heading1>Partner Kami 👨‍💻</x-heading1>
        </div>
        <div class="tools-logos w-full overflow-hidden flex flex-col gap-5">
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
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
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slide_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
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
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="group/slider flex flex-nowrap w-max items-center">
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
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
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="logo-container animate-[slideToR_50s_linear_infinite] group-hover/slider:pause-animate flex gap-5 pl-5 items-center flex-nowrap">
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
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Logo Bank Bukopin.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank Bukopin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bca-bank-central-asia-logo.svg') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BCA</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Pertamina.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Pertamina</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perusahaan Minyak dan Gas Bumi
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/bri-logo-freelogovectors.net_.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BRI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/lg-65571292f0011-bsi.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">BSI</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/Bank bjb [siklogo.blogspot.com].png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Bank BJB</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="{{ asset('assets/images/logos/mandiri.png') }}"
                                    class="w-full h-full object-contain" alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Mandiri</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Perbankan dan Keuangan
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        $(".testi-carousel").flickity({
            // options
            cellAlign: "left",
            contain: true,
            pageDots: false,
            prevNextButtons: false,
        });

        // previous
        $(".btn-prev").on("click", function() {
            $(".testi-carousel").flickity("previous", true);
        });

        // next
        $(".btn-next").on("click", function() {
            $(".testi-carousel").flickity("next", true);
        });
    </script>

    <script>
        const searchInput = document.getElementById("searchInput");
        const resetButton = document.getElementById("resetButton");

        searchInput.addEventListener("input", function() {
            if (this.value.trim() !== "") {
                resetButton.classList.remove("hidden");
            } else {
                resetButton.classList.add("hidden");
            }
        });

        resetButton.addEventListener("click", function() {
            resetButton.classList.add("hidden");
        });
    </script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const menuButton = document.getElementById("menu-button");
            const dropdownMenu = document.querySelector(".dropdown-menu");

            menuButton.addEventListener("click", function() {
                dropdownMenu.classList.toggle("hidden");
            });

            // Close the dropdown menu when clicking outside of it
            document.addEventListener("click", function(event) {
                const isClickInside =
                    menuButton.contains(event.target) ||
                    dropdownMenu.contains(event.target);
                if (!isClickInside) {
                    dropdownMenu.classList.add("hidden");
                }
            });
        });
    </script>
    <script>
        // Initialize Flickity carousel
        document.addEventListener('DOMContentLoaded', function() {
            const carousel = document.querySelector('.testi-carousel');
            const flkty = new Flickity(carousel, {
                cellAlign: 'left',
                contain: true,
                freeScroll: true,
                pageDots: false,
                prevNextButtons: false,
                groupCells: false,
                adaptiveHeight: false,
                wrapAround: false,
                dragThreshold: 10,
                selectedAttraction: 0.025,
                friction: 0.28
            });

            // Custom navigation buttons
            const prevButton = document.querySelector('.btn-prev');
            const nextButton = document.querySelector('.btn-next');

            if (prevButton && nextButton) {
                prevButton.addEventListener('click', function() {
                    flkty.previous();
                });

                nextButton.addEventListener('click', function() {
                    flkty.next();
                });
            }

            // Update button states
            function updateButtons() {
                if (prevButton && nextButton) {
                    prevButton.disabled = flkty.selectedIndex === 0;
                    nextButton.disabled = flkty.selectedIndex >= flkty.slides.length - flkty.options.groupCells;

                    prevButton.style.opacity = prevButton.disabled ? '0.3' : '1';
                    nextButton.style.opacity = nextButton.disabled ? '0.3' : '1';
                }
            }

            flkty.on('change', updateButtons);
            updateButtons();
        });
    </script>
@endsection
