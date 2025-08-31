<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="bg-belibang-black font-sans text-white">
    <nav class="w-full fixed top-0 bg-[#00000010] backdrop-blur-lg z-50">
        <div class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-[74px]">

                <!-- Logo -->
                <div class="flex items-center">
                    <a href="index.html" class="flex w-[120px] sm:w-[154px] shrink-0 items-center">
                        <img src="{{ asset('assets/images/logos/logo-shibaazaki.png') }}" class="h-24" alt="logo">
                        <span class="text-belibang-grey font-semibold text-xl">Shibaazaki</span>
                    </a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center gap-[26px]">
                    <ul class="flex gap-6 items-center">
                        <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                            <a href="index.html">Dashboard</a>
                        </li>
                        <li
                            class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300 relative">
                            <button id="desktop-menu-button"
                                class="flex items-center gap-1 focus:text-belibang-light-grey">
                                <span>Categories</span>
                                <svg class="w-4 h-4 transition-transform duration-300" id="desktop-arrow" fill="none"
                                    stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7"></path>
                                </svg>
                            </button>
                            <div id="desktop-dropdown"
                                class="dropdown-menu hidden absolute top-[52px] grid grid-cols-2 p-4 gap-[10px] w-[526px] rounded-[20px] bg-[#1E1E1E] border border-[#414141] z-10 shadow-2xl">
                                <!-- All Products - Full Width -->
                                <div
                                    class="col-span-2 flex justify-between items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300 cursor-pointer">
                                    <div class="flex items-center">
                                        <div
                                            class="w-[58px] h-[58px] flex shrink-0 items-center justify-center bg-blue-500/20 rounded-lg mr-3">
                                            <svg class="w-6 h-6 text-blue-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l1.5-6m4.5 6h6m-6 0v6m6-6v6">
                                                </path>
                                            </svg>
                                        </div>
                                        <div class="flex flex-col">
                                            <p class="font-bold text-sm text-white">All Products</p>
                                            <p class="text-xs text-belibang-grey">Everything in One Place</p>
                                        </div>
                                    </div>
                                    <div class="w-6 h-6 flex shrink-0">
                                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z">
                                            </path>
                                        </svg>
                                    </div>
                                </div>

                                <!-- Templates -->
                                <div
                                    class="flex items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300 cursor-pointer">
                                    <div
                                        class="w-[58px] h-[58px] flex shrink-0 items-center justify-center bg-green-500/20 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-green-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Templates</p>
                                        <p class="text-xs text-belibang-grey">Designs Made Easy</p>
                                    </div>
                                </div>

                                <!-- Courses -->
                                <div
                                    class="flex items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300 cursor-pointer">
                                    <div
                                        class="w-[58px] h-[58px] flex shrink-0 items-center justify-center bg-purple-500/20 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-purple-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Courses</p>
                                        <p class="text-xs text-belibang-grey">Expand Your Skills</p>
                                    </div>
                                </div>

                                <!-- Ebooks -->
                                <div
                                    class="flex items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300 cursor-pointer">
                                    <div
                                        class="w-[58px] h-[58px] flex shrink-0 items-center justify-center bg-orange-500/20 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-orange-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Ebooks</p>
                                        <p class="text-xs text-belibang-grey">Read and Learn</p>
                                    </div>
                                </div>

                                <!-- Fonts -->
                                <div
                                    class="flex items-center rounded-2xl p-[12px_16px] border border-[#414141] hover:bg-[#2A2A2A] transition-all duration-300 cursor-pointer">
                                    <div
                                        class="w-[58px] h-[58px] flex shrink-0 items-center justify-center bg-pink-500/20 rounded-lg mr-3">
                                        <svg class="w-6 h-6 text-pink-400" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-col">
                                        <p class="font-bold text-sm text-white">Fonts</p>
                                        <p class="text-xs text-belibang-grey">Typography Selection</p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                            <a href="">Stories</a>
                        </li>
                        <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                            <a href="">About</a>
                        </li>
                    </ul>
                </div>

                <!-- Desktop Auth Buttons -->
                <div class="hidden lg:flex gap-6 items-center">
                    <a href=""
                        class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">Log
                        in</a>
                    <a href=""
                        class="p-[8px_16px] w-fit h-fit rounded-[12px] text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                        up</a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button id="mobile-menu-button"
                        class="text-belibang-grey hover:text-white transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path id="hamburger" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                            <path id="close" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" class="hidden"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Menu -->
            <div id="mobile-menu" class="lg:hidden hidden bg-[#1E1E1E] border-t border-belibang-dark-grey">
                <div class="px-4 py-6 space-y-4">
                    <!-- Mobile Navigation Links -->
                    <a href="index.html"
                        class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Dashboard</a>

                    <!-- Mobile Categories Dropdown -->
                    <div class="space-y-2">
                        <button id="mobile-categories-button"
                            class="flex items-center justify-between w-full py-2 text-belibang-grey hover:text-white transition-colors duration-300">
                            <span>Categories</span>
                            <svg class="w-4 h-4 transition-transform duration-300" id="mobile-arrow" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div id="mobile-categories" class="hidden pl-4 space-y-3">
                            <a href=""
                                class="flex items-center py-2 text-sm text-belibang-grey hover:text-white transition-colors duration-300">
                                <div class="w-8 h-8 flex items-center justify-center bg-blue-500/20 rounded-lg mr-3">
                                    <svg class="w-4 h-4 text-blue-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-1.5 6M7 13l1.5-6m4.5 6h6m-6 0v6m6-6v6">
                                        </path>
                                    </svg>
                                </div>
                                All Products
                            </a>
                            <a href=""
                                class="flex items-center py-2 text-sm text-belibang-grey hover:text-white transition-colors duration-300">
                                <div class="w-8 h-8 flex items-center justify-center bg-green-500/20 rounded-lg mr-3">
                                    <svg class="w-4 h-4 text-green-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                        </path>
                                    </svg>
                                </div>
                                Templates
                            </a>
                            <a href=""
                                class="flex items-center py-2 text-sm text-belibang-grey hover:text-white transition-colors duration-300">
                                <div class="w-8 h-8 flex items-center justify-center bg-purple-500/20 rounded-lg mr-3">
                                    <svg class="w-4 h-4 text-purple-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 14l9-5-9-5-9 5 9 5z"></path>
                                    </svg>
                                </div>
                                Courses
                            </a>
                            <a href=""
                                class="flex items-center py-2 text-sm text-belibang-grey hover:text-white transition-colors duration-300">
                                <div class="w-8 h-8 flex items-center justify-center bg-orange-500/20 rounded-lg mr-3">
                                    <svg class="w-4 h-4 text-orange-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                Ebooks
                            </a>
                            <a href=""
                                class="flex items-center py-2 text-sm text-belibang-grey hover:text-white transition-colors duration-300">
                                <div class="w-8 h-8 flex items-center justify-center bg-pink-500/20 rounded-lg mr-3">
                                    <svg class="w-4 h-4 text-pink-400" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z">
                                        </path>
                                    </svg>
                                </div>
                                Fonts
                            </a>
                        </div>
                    </div>

                    <a href=""
                        class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Stories</a>
                    <a href=""
                        class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Benefits</a>
                    <a href=""
                        class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">About</a>

                    <!-- Mobile Auth Buttons -->
                    <div class="pt-4 border-t border-belibang-dark-grey space-y-3">
                        <a href=""
                            class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Log
                            in</a>
                        <a href=""
                            class="block py-2 px-4 text-center rounded-lg text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">Sign
                            up</a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="w-full pt-16 md:pt-[74px] h-[30vh] bg-cover bg-no-repeat bg-center relative z-0"
        style="background-image: url('https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <!-- Overlay Gradient -->
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
    </header>
    <!-- Header Section -->
    <section class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <!-- Category Header -->
        <div class="mb-12">
            <div class="flex flex-col lg:flex-row items-start lg:items-center gap-6">
                <div class="w-[80px] h-[80px] flex shrink-0 items-center justify-center p-4 rounded-full bg-white">
                    <img src="assets/images/icons/data-storage.png" alt="UPS Icon"
                        class="w-full h-full object-contain">
                </div>
                <div class="flex-1">
                    <h1 class="font-bold text-3xl sm:text-4xl lg:text-5xl mb-4">UPS (Uninterruptible Power Supply)</h1>
                    <p class="text-lg text-belibang-grey leading-relaxed">
                        Semua jenis UPS dari 1 KVA sampai 200 KVA berbagai merk (Pascal, APC, Socomec, dll).
                        Kami menyediakan solusi power backup terpercaya untuk kebutuhan bisnis dan industri Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <div class="flex flex-wrap gap-4 items-center justify-between mb-8">
            <div class="flex flex-wrap gap-3">
                <button
                    class="filter-btn active px-4 py-2 rounded-lg border border-gray-600 text-sm font-medium transition-all duration-300"
                    data-filter="all">
                    Semua Produk
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-lg border border-gray-600 text-sm font-medium hover:border-belibang-purple transition-all duration-300"
                    data-filter="pascal">
                    Pascal
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-lg border border-gray-600 text-sm font-medium hover:border-belibang-purple transition-all duration-300"
                    data-filter="apc">
                    APC
                </button>
                <button
                    class="filter-btn px-4 py-2 rounded-lg border border-gray-600 text-sm font-medium hover:border-belibang-purple transition-all duration-300"
                    data-filter="socomec">
                    Socomec
                </button>
            </div>
            <div class="flex items-center gap-3">
                <label for="sort" class="text-sm text-belibang-grey">Urutkan:</label>
                <select id="sort"
                    class="px-3 py-2 rounded-lg bg-gray-800 border border-gray-600 text-sm focus:border-belibang-purple focus:outline-none">
                    <option value="name">Nama A-Z</option>
                    <option value="price-low">Harga Terendah</option>
                    <option value="price-high">Harga Tertinggi</option>
                    <option value="capacity">Kapasitas</option>
                </select>
            </div>
        </div>
    </section>

    <!-- Products Grid -->
    <section class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 mb-16">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="products-grid">

            <!-- Product Card 1 -->
            <div class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300"
                data-brand="pascal" data-capacity="1" data-price="2500000">
                <div
                    class="flex flex-col p-6 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/280x200?text=Pascal+UPS+1KVA" alt="Pascal UPS 1KVA"
                            class="w-full h-48 object-cover rounded-lg">
                        <span
                            class="absolute top-2 right-2 bg-green-600 text-white text-xs px-2 py-1 rounded-full">Tersedia</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded-full">Pascal</span>
                            <span class="text-xs text-belibang-grey">1 KVA</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Pascal UPS 1000VA/600W</h3>
                        <p class="text-sm text-belibang-grey mb-4 line-clamp-2">
                            UPS Pascal dengan kapasitas 1KVA ideal untuk komputer dan perangkat kecil. Dilengkapi dengan
                            stabilizer dan surge protection.
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xl font-bold text-belibang-orange">Rp 2.500.000</p>
                                <p class="text-xs text-belibang-grey">Stok: 15 unit</p>
                            </div>
                            <button
                                class="px-4 py-2 bg-img-purple-to-orange rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 2 -->
            <div class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300"
                data-brand="apc" data-capacity="3" data-price="8500000">
                <div
                    class="flex flex-col p-6 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/280x200?text=APC+UPS+3KVA" alt="APC UPS 3KVA"
                            class="w-full h-48 object-cover rounded-lg">
                        <span
                            class="absolute top-2 right-2 bg-green-600 text-white text-xs px-2 py-1 rounded-full">Tersedia</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded-full">APC</span>
                            <span class="text-xs text-belibang-grey">3 KVA</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">APC Smart-UPS 3000VA</h3>
                        <p class="text-sm text-belibang-grey mb-4 line-clamp-2">
                            UPS APC Smart-UPS dengan teknologi terdepan untuk server dan perangkat kritis. Dilengkapi
                            LCD display dan network management.
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xl font-bold text-belibang-orange">Rp 8.500.000</p>
                                <p class="text-xs text-belibang-grey">Stok: 8 unit</p>
                            </div>
                            <button
                                class="px-4 py-2 bg-img-purple-to-orange rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 3 -->
            <div class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300"
                data-brand="socomec" data-capacity="10" data-price="25000000">
                <div
                    class="flex flex-col p-6 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/280x200?text=Socomec+UPS+10KVA" alt="Socomec UPS 10KVA"
                            class="w-full h-48 object-cover rounded-lg">
                        <span
                            class="absolute top-2 right-2 bg-green-600 text-white text-xs px-2 py-1 rounded-full">Tersedia</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded-full">Socomec</span>
                            <span class="text-xs text-belibang-grey">10 KVA</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Socomec NETYS RT 10kVA</h3>
                        <p class="text-sm text-belibang-grey mb-4 line-clamp-2">
                            UPS Socomec untuk aplikasi industri dengan efisiensi tinggi. Cocok untuk data center dan
                            aplikasi mission critical.
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xl font-bold text-belibang-orange">Rp 25.000.000</p>
                                <p class="text-xs text-belibang-grey">Stok: 3 unit</p>
                            </div>
                            <button
                                class="px-4 py-2 bg-img-purple-to-orange rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 4 -->
            <div class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300"
                data-brand="pascal" data-capacity="5" data-price="12000000">
                <div
                    class="flex flex-col p-6 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/280x200?text=Pascal+UPS+5KVA" alt="Pascal UPS 5KVA"
                            class="w-full h-48 object-cover rounded-lg">
                        <span
                            class="absolute top-2 right-2 bg-yellow-600 text-white text-xs px-2 py-1 rounded-full">Terbatas</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded-full">Pascal</span>
                            <span class="text-xs text-belibang-grey">5 KVA</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Pascal UPS 5000VA Online</h3>
                        <p class="text-sm text-belibang-grey mb-4 line-clamp-2">
                            UPS Pascal tipe online dengan double conversion untuk perlindungan maksimal. Ideal untuk
                            server dan perangkat sensitif.
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xl font-bold text-belibang-orange">Rp 12.000.000</p>
                                <p class="text-xs text-belibang-grey">Stok: 2 unit</p>
                            </div>
                            <button
                                class="px-4 py-2 bg-img-purple-to-orange rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 5 -->
            <div class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300"
                data-brand="apc" data-capacity="20" data-price="45000000">
                <div
                    class="flex flex-col p-6 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/280x200?text=APC+UPS+20KVA" alt="APC UPS 20KVA"
                            class="w-full h-48 object-cover rounded-lg">
                        <span
                            class="absolute top-2 right-2 bg-green-600 text-white text-xs px-2 py-1 rounded-full">Tersedia</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded-full">APC</span>
                            <span class="text-xs text-belibang-grey">20 KVA</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">APC Galaxy 5500 20kVA</h3>
                        <p class="text-sm text-belibang-grey mb-4 line-clamp-2">
                            UPS APC Galaxy untuk aplikasi data center dengan modular design. Efisiensi tinggi dan
                            skalabilitas yang fleksibel.
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xl font-bold text-belibang-orange">Rp 45.000.000</p>
                                <p class="text-xs text-belibang-grey">Stok: 1 unit</p>
                            </div>
                            <button
                                class="px-4 py-2 bg-img-purple-to-orange rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Product Card 6 -->
            <div class="product-card group p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300"
                data-brand="socomec" data-capacity="50" data-price="85000000">
                <div
                    class="flex flex-col p-6 rounded-2xl bg-img-black-gradient group-hover:bg-img-black transition-all duration-300">
                    <div class="relative mb-4">
                        <img src="https://via.placeholder.com/280x200?text=Socomec+UPS+50KVA" alt="Socomec UPS 50KVA"
                            class="w-full h-48 object-cover rounded-lg">
                        <span
                            class="absolute top-2 right-2 bg-red-600 text-white text-xs px-2 py-1 rounded-full">Pre-Order</span>
                    </div>
                    <div class="flex-1">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs bg-gray-700 text-gray-300 px-2 py-1 rounded-full">Socomec</span>
                            <span class="text-xs text-belibang-grey">50 KVA</span>
                        </div>
                        <h3 class="font-bold text-lg mb-2">Socomec MODULYS GP 50kVA</h3>
                        <p class="text-sm text-belibang-grey mb-4 line-clamp-2">
                            UPS Socomec modular untuk aplikasi industri besar. Teknologi terdepan dengan efisiensi
                            energi optimal dan reliability tinggi.
                        </p>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-xl font-bold text-belibang-orange">Rp 85.000.000</p>
                                <p class="text-xs text-belibang-grey">Stok: Pre-Order</p>
                            </div>
                            <button
                                class="px-4 py-2 bg-img-purple-to-orange rounded-lg text-sm font-medium hover:opacity-90 transition-opacity">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            <button
                class="px-8 py-3 bg-gray-800 border border-gray-600 rounded-lg font-medium hover:border-belibang-purple hover:bg-gray-700 transition-all duration-300">
                Muat Lebih Banyak
            </button>
        </div>
    </section>
    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');
        const sortSelect = document.getElementById('sort');

        // Filter by brand
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.dataset.filter;

                productCards.forEach(card => {
                    if (filter === 'all' || card.dataset.brand === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Sort functionality
        sortSelect.addEventListener('change', () => {
            const sortValue = sortSelect.value;
            const productsGrid = document.getElementById('products-grid');
            const cards = Array.from(productCards);

            cards.sort((a, b) => {
                switch (sortValue) {
                    case 'name':
                        const nameA = a.querySelector('h3').textContent;
                        const nameB = b.querySelector('h3').textContent;
                        return nameA.localeCompare(nameB);
                    case 'price-low':
                        const priceA = parseInt(a.dataset.price);
                        const priceB = parseInt(b.dataset.price);
                        return priceA - priceB;
                    case 'price-high':
                        const priceA2 = parseInt(a.dataset.price);
                        const priceB2 = parseInt(b.dataset.price);
                        return priceB2 - priceA2;
                    case 'capacity':
                        const capA = parseInt(a.dataset.capacity);
                        const capB = parseInt(b.dataset.capacity);
                        return capA - capB;
                    default:
                        return 0;
                }
            });

            // Clear and re-append sorted cards
            productsGrid.innerHTML = '';
            cards.forEach(card => productsGrid.appendChild(card));
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
</body>

</html>
