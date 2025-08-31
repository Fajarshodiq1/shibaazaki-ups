<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

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

    <header
        class="w-full pt-16 md:pt-[74px] h-[50vh] sm:h-[60vh] lg:h-[70vh] bg-cover bg-no-repeat bg-center relative z-0"
        style="background-image: url('https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">

        <!-- Content Container -->
        <div
            class="container max-w-[1130px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center gap-6 sm:gap-8 lg:gap-[34px] z-10 h-full">

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
                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
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

    <section id="Category"
        class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-2xl sm:text-[32px] mb-5">Layanan Terbaik Kami👩‍💻</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-5 gap-4">
            <a href="/layanan"
                class="group category-card category-card-responsive w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-full bg-img-black-gradient group-active:bg-img-black transition-all duration-300 space-y-3">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="assets/images/icons/data-storage.png" alt="icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <div class="px-[6px] flex flex-col text-left space-y-2">
                        <p class="font-bold text-sm">UPS</p>
                        <p class="text-xs text-belibang-grey line-clamp-2">Semua jenis UPS dari 1 KVA sampai 200 KVA
                            berbagai merk
                            (Pascal, APC, Socomec, dll).</p>
                    </div>
                </div>
            </a>

            <a href=""
                class="group category-card category-card-responsive w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-full bg-img-black-gradient group-active:bg-img-black transition-all duration-300 space-y-3">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="assets/images/icons/accumulator.png" alt="icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <div class="px-[6px] flex flex-col text-left space-y-2">
                        <p class="font-bold text-sm">Battery</p>
                        <p class="text-xs text-belibang-grey line-clamp-2">Berbagai ukuran & merk battery untuk UPS
                            (ICA, Enerplus,
                            Remington, dll).</p>
                    </div>
                </div>
            </a>

            <a href=""
                class="group category-card category-card-responsive w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-full bg-img-black-gradient group-active:bg-img-black transition-all duration-300 space-y-3">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="assets/images/icons/rent.png" alt="icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <div class="px-[6px] flex flex-col text-left space-y-2">
                        <p class="font-bold text-sm">Rental UPS</p>
                        <p class="text-xs text-belibang-grey line-clamp-2">Layanan penyewaan UPS harian, mingguan,
                            bulanan, hingga
                            tahunan.</p>
                    </div>
                </div>
            </a>

            <a href=""
                class="group category-card category-card-responsive w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-full bg-img-black-gradient group-active:bg-img-black transition-all duration-300 space-y-3">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="assets/images/icons/customer-service.png" alt="icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <div class="px-[6px] flex flex-col text-left space-y-2">
                        <p class="font-bold text-sm">Service UPS</p>
                        <p class="text-xs text-belibang-grey line-clamp-2">Jasa service UPS rusak, ganti sparepart, dan
                            perbaikan
                            darurat.</p>
                    </div>
                </div>
            </a>

            <a href=""
                class="group category-card category-card-responsive w-fit h-fit p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div
                    class="flex flex-col p-[18px] rounded-2xl w-full bg-img-black-gradient group-active:bg-img-black transition-all duration-300 space-y-3">
                    <div class="w-[58px] h-[58px] flex shrink-0 items-center justify-center">
                        <img src="assets/images/icons/optimizing.png" alt="icon"
                            class="w-full h-full object-contain" />
                    </div>
                    <div class="px-[6px] flex flex-col text-left space-y-2">
                        <p class="font-bold text-sm">Preventive Maintenance</p>
                        <p class="text-xs text-belibang-grey line-clamp-2">Layanan pengecekan & perawatan rutin UPS
                            agar tetap
                            stabil dan tahan lama.</p>
                    </div>
                </div>
            </a>
        </div>
    </section>


    <section class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <div class="space-y-6">
                {{-- badge --}}
                <h2 class="font-semibold text-3xl sm:text-4xl mb-5">Tentang Kami❓</h2>
                <div class="prose prose-lg text-belibang-grey leading-relaxed">
                    <p>
                        PT. Shibaazaki adalah perusahaan yang spesialis dalam menyediakan berbagai
                        layanan terkait dengan sistem daya tak terputus (UPS) dan genset. Dengan dedikasi tinggi
                        terhadap keandalan dan ketersediaan daya listrik, perusahaan ini telah menjadi mitra
                        terpercaya bagi berbagai industri yang memerlukan solusi yang handal untuk menjaga
                        kelancaran operasional mereka.
                    </p>
                </div>
                <div class="flex gap-3">
                    <a href="about.html"
                        class="px-6 py-3 bg-gradient-to-r w-fit from-blue-500 to-green-500 text-white rounded-full hover:from-blue-600 hover:to-green-600 transition-all duration-300 flex items-center gap-2">
                        Selengkapnya
                    </a>
                    <a href="about.html"
                        class="px-6 py-3 border rounded-full transition-all duration-300 flex items-center gap-2">
                        Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="relative">
                <div class="p-[1px] rounded-2xl bg-img-purple-to-orange">
                    <div class="bg-img-black-gradient rounded-2xl p-8 h-[550px] flex items-center justify-center">
                        <img src="https://scontent.fcgk24-2.fna.fbcdn.net/v/t39.30808-6/475301182_496416920170422_7602111244084816273_n.jpg?_nc_cat=103&ccb=1-7&_nc_sid=127cfc&_nc_eui2=AeEvOoo5WowSJWshj6geSxwhIFlJ652DcKwgWUnrnYNwrJx3_-5wDtmftJ1WuVLOsN3TIreCoxHqNxRs5OoBTLkc&_nc_ohc=dwkrzTcLTzoQ7kNvwGeh3VS&_nc_oc=AdkES85hIcwqxP1hxqRahrXYui9NQDGecmggHYMYNfMdVX7nrsVp5qPVOrH5hUegc0A&_nc_zt=23&_nc_ht=scontent.fcgk24-2.fna&_nc_gid=XYZkKOtqKu-xtC8nLyvAyg&oh=00_AfVbqgNbuooBhcf1SVoZAFCPf8S2Qn975gRZSeSJHGB5tA&oe=68AA5D90"
                            alt="" class="w-full h-full object-cover rounded-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statistics Section -->

    <section class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-3xl sm:text-4xl mb-5">Pencapaian Kami👏</h2>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="text-4xl font-bold text-blue-400 mb-2">1000+</div>
                    <p class="text-belibang-grey">Klien Terpuaskan</p>
                </div>
            </div>
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="text-4xl font-bold text-green-400 mb-2">10+</div>
                    <p class="text-belibang-grey">Tahun Pengalaman</p>
                </div>
            </div>
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="text-4xl font-bold text-blue-400 mb-2">24/7</div>
                    <p class="text-belibang-grey">Layanan Support</p>
                </div>
            </div>
            <div
                class="stat-card p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                <div class="bg-img-black-gradient rounded-2xl p-8 text-center h-full transition-all duration-300">
                    <div class="text-4xl font-bold text-green-400 mb-2">50+</div>
                    <p class="text-belibang-grey">Brand Partner</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Values Section -->

    <section class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-3xl sm:text-4xl mb-5">Nilai-Nilai Kami⭐</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <div
                class="p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300 group">
                <div
                    class="bg-img-black-gradient rounded-2xl p-8 h-full group-active:bg-img-black transition-all duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6">
                        <svg viewBox="0 0 24 24" class="h-10 w-10" fill="none"
                            xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns="http://www.w3.org/2000/svg"
                            version="1.1" xmlns:cc="http://creativecommons.org/ns#"
                            xmlns:dc="http://purl.org/dc/elements/1.1/" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <g transform="translate(0 -1028.4)">
                                    <path d="m3 1031.4v10c0 4.2 3.6322 8 9 10 5.368-2 9-5.8 9-10v-10h-18z"
                                        fill="#95a5a6"></path>
                                    <path d="m3 1030.4v10c0 4.2 3.6322 8 9 10 5.368-2 9-5.8 9-10v-10h-18z"
                                        fill="#ecf0f1"></path>
                                    <path d="m3 1030.4v10c0 4.2 3.6322 8 9 10v-20h-9z" fill="#bdc3c7"></path>
                                    <path d="m5 1032.4v8c0 3.4 2.8251 6.4 7 8 4.175-1.6 7-4.6 7-8v-8h-14z"
                                        fill="#27ae60"></path>
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
                    <h3 class="font-bold text-xl mb-4">Reliability</h3>
                    <p class="text-belibang-grey">Keandalan produk dan layanan adalah prioritas utama kami dalam
                        setiap solusi yang diberikan.</p>
                </div>
            </div>
            <div
                class="p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300 group">
                <div
                    class="bg-img-black-gradient rounded-2xl p-8 h-full group-active:bg-img-black transition-all duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6">
                        <svg height="200px" class="w-10 h-10" width="200px" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 512 512" xml:space="preserve" fill="#000000">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <polygon style="fill:#A0BF7C;" points="345.6,499.2 345.6,166.4 448,64 448,499.2 ">
                                </polygon>
                                <polygon style="fill:#B3CC96;"
                                    points="243.2,499.2 243.2,268.8 345.6,166.4 345.6,499.2 "></polygon>
                                <polygon style="fill:#D9E5CB;" points="12.8,499.2 140.8,371.2 140.8,499.2 "></polygon>
                                <polygon style="fill:#C6D9B0;"
                                    points="140.8,499.2 140.8,371.2 243.2,268.8 243.2,499.2 "></polygon>
                                <path style="fill:#573A32;"
                                    d="M499.2,102.4c7.074,0,12.8-5.726,12.8-12.8V12.8C512,5.726,506.274,0,499.2,0h-76.8 c-7.074,0-12.8,5.726-12.8,12.8s5.726,12.8,12.8,12.8h45.901L438.98,54.921c-0.026,0.026-0.043,0.043-0.068,0.068L3.755,490.138 c-1.195,1.186-2.142,2.611-2.79,4.198c-0.026,0.06-0.034,0.128-0.06,0.196C0.341,495.983,0,497.545,0,499.2 c0,1.655,0.341,3.217,0.913,4.668c0.026,0.068,0.034,0.128,0.06,0.196c1.297,3.157,3.814,5.666,6.972,6.972 c0.06,0.026,0.128,0.034,0.196,0.06C9.583,511.659,11.145,512,12.8,512h486.4c7.066,0,12.8-5.726,12.8-12.8 c0-7.074-5.734-12.8-12.8-12.8h-38.4V69.299l25.6-25.6V89.6C486.4,96.674,492.126,102.4,499.2,102.4z M153.6,376.499l76.8-76.8 V486.4h-76.8V376.499z M128,486.4H43.699L128,402.099V486.4z M256,274.099l76.8-76.8V486.4H256V274.099z M435.2,486.4h-76.8V171.699 l76.8-76.8V486.4z">
                                </path>
                            </g>
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-4">Innovation</h3>
                    <p class="text-belibang-grey">Selalu mengikuti perkembangan teknologi terbaru untuk memberikan
                        solusi terdepan kepada klien.</p>
                </div>
            </div>
            <div
                class="p-[1px] rounded-2xl bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300 group">
                <div
                    class="bg-img-black-gradient rounded-2xl p-8 h-full group-active:bg-img-black transition-all duration-300">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mb-6">
                        <svg height="200px" width="200px" class="w-10 h-10" version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
                    <h3 class="font-bold text-xl mb-4">Customer Focus</h3>
                    <p class="text-belibang-grey">Kepuasan pelanggan adalah misi kami, dengan layanan personal dan
                        support yang responsif.</p>
                </div>
            </div>
        </div>
    </section>


    <section id="NewProduct"
        class="container max-w-[1230px] mx-auto mb-[102px] flex flex-col gap-8 px-4 sm:px-6 lg:px-8">
        <h2 class="font-semibold text-[32px] mb-5">Produk UPS Kami💯</h2>
        <div class="grid grid-cols-4 gap-[22px]">
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="https://www.ptsubratainsansejahtera.com/wp-content/uploads/2024/01/emerson_ups.jpg"
                        class="w-full h-full object-cover" alt="thumbnail" />
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html"
                            class="font-semibold text-xl line-clamp-2 hover:line-clamp-none">Emerson</a>
                    </div>
                </div>
            </div>
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="https://www.ptsubratainsansejahtera.com/wp-content/uploads/2024/01/show_Riello_UPS_MPS_60-80_Closed.jpg"
                        class="w-full h-full object-cover" alt="thumbnail" />
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html"
                            class="font-semibold text-xl line-clamp-2 hover:line-clamp-none">Riello</a>
                    </div>
                </div>
            </div>
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="https://www.ptsubratainsansejahtera.com/wp-content/uploads/2024/01/hero-pascal.png"
                        class="w-full h-full object-cover" alt="thumbnail" />
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html" class="font-semibold text-xl line-clamp-2 hover:line-clamp-none">Pascal
                        </a>
                    </div>
                </div>
            </div>
            <div class="product-card flex flex-col rounded-[18px] bg-[#181818] overflow-hidden">
                <a href="details.html" class="thumbnail w-full h-[180px] flex shrink-0 overflow-hidden relative">
                    <img src="https://www.ptsubratainsansejahtera.com/wp-content/uploads/2024/01/unnamed.jpg"
                        class="w-full h-full object-cover" alt="thumbnail" />
                </a>
                <div class="p-[10px_14px_12px] h-full flex flex-col justify-between gap-[14px]">
                    <div class="flex flex-col gap-1">
                        <a href="details.html"
                            class="font-semibold text-xl line-clamp-2 hover:line-clamp-none">Laplace</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Testimonial" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">
                Pelanggan Puas <br />Dengan Produk Kami 🤩
            </h2>
            <div class="flex gap-[14px] items-center">
                <button class="btn-prev w-10 h-10 shrink-0 rounded-full overflow-hidden rotate-180">
                    <img src="../assets/images/icons/circle-arrow-r.svg" alt="icon" />
                </button>
                <button class="btn-next w-10 h-10 shrink-0 rounded-full overflow-hidden">
                    <img src="../assets/images/icons/circle-arrow-r.svg" alt="icon" />
                </button>
            </div>
        </div>
        <div class="w-full overflow-x-hidden no-scrollbar">
            <div class="testi-carousel" data-flickity>
                <div class="flex w-[calc((100vw-1130px-20px)/2)] shrink-0"></div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('../assets/images/backgrounds/Testimonials-image.png')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                            </div>
                            <p class="leading-[26px]">
                                Using these templates has boosted my productivity
                                significantly. Highly recommended for all designers!
                            </p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="../assets/images/photos/photo1.png" class="w-full h-full object-cover"
                                    alt="photo" />
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez
                                </p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">
                                    Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('../assets/images/backgrounds/Testimonials-image.png')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                            </div>
                            <p class="leading-[26px]">
                                Using these templates has boosted my productivity
                                significantly. Highly recommended for all designers!
                            </p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="../assets/images/photos/photo1.png" class="w-full h-full object-cover"
                                    alt="photo" />
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez
                                </p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">
                                    Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('../assets/images/backgrounds/Testimonials-image.png')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                            </div>
                            <p class="leading-[26px]">
                                Using these templates has boosted my productivity
                                significantly. Highly recommended for all designers!
                            </p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="../assets/images/photos/photo2.png" class="w-full h-full object-cover"
                                    alt="photo" />
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Michael Chen
                                </p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">
                                    UI/UX Designer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('../assets/images/backgrounds/Testimonials-image.png')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                            </div>
                            <p class="leading-[26px]">
                                Using these templates has boosted my productivity
                                significantly. Highly recommended for all designers!
                            </p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="../assets/images/photos/photo1.png" class="w-full h-full object-cover"
                                    alt="photo" />
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Emily Robinson
                                </p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">
                                    Senior Graphic Designer
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="testimonial-card bg-[#181818] rounded-[20px] flex mr-5 w-[420px] min-h-[256px] shrink-0 overflow-hidden">
                    <div
                        class="p-6 flex flex-col w-full gap-[42px] shrink-0 bg-[url('../assets/images/backgrounds/Testimonials-image.png')] bg-contain bg-no-repeat bg-top">
                        <div class="flex flex-col gap-4">
                            <div class="flex items-center ga-[6px]">
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                                <img src="../assets/images/icons/star.svg" alt="star" />
                            </div>
                            <p class="leading-[26px]">
                                Using these templates has boosted my productivity
                                significantly. Highly recommended for all designers!
                            </p>
                        </div>
                        <div class="flex gap-[14px] items-center">
                            <div class="w-12 h-12 flex shrink-0 rounded-full overflow-hidden">
                                <img src="../assets/images/photos/photo1.png" class="w-full h-full object-cover"
                                    alt="photo" />
                            </div>
                            <div class="flex flex-col justify-center-center">
                                <p
                                    class="font-semibold text-left leading-[170%] bg-clip-text text-transparent bg-gradient-to-r from-[#B05CB0] to-[#FCB16B]">
                                    Sarah Lopez
                                </p>
                                <p class="font-semibold text-left text-xs text-belibang-grey">
                                    Brand Design Consultant
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <section id="Tool" class="mb-[102px] flex flex-col gap-8">
        <div class="container max-w-[1130px] mx-auto flex justify-between items-center">
            <h2 class="font-semibold text-[32px]">Browse Tools</h2>
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
                                <img src="../assets/images/logos/blender.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    3D Ul Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Excel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Data Analysis
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Kotlin.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Laravel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Vue.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/figma-logo.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Ul/UX Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/flutter.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/golang.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
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
                                <img src="../assets/images/logos/blender.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    3D Ul Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Excel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Data Analysis
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Kotlin.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Laravel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Vue.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/figma-logo.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Ul/UX Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/flutter.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/golang.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
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
                                <img src="../assets/images/logos/blender.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    3D Ul Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Excel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Data Analysis
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Kotlin.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Laravel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Vue.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/figma-logo.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Ul/UX Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/flutter.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/golang.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
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
                                <img src="../assets/images/logos/blender.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Blender</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    3D Ul Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Excel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Excel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Data Analysis
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Kotlin.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Kotlin</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Android Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Laravel.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Laravel</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/Vue.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Vue</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Front-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/figma-logo.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Figma</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Ul/UX Design
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/flutter.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Flutter</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Mobile Development
                                </p>
                            </div>
                        </div>
                    </a>
                    <a href=""
                        class="group tool-card w-fit h-fit p-[1px] rounded-full bg-img-transparent hover:bg-img-purple-to-orange transition-all duration-300">
                        <div
                            class="w-[300px] h-[100px] rounded-full p-[18px_24px] bg-img-black-gradient group-hover:[background-image:linear-gradient(#181818,#181818)] group-active:bg-img-black transition-all duration-300 flex gap-4 items-center shrink-0">
                            <div class="w-16 h-16 overflow-hidden flex shrink-0">
                                <img src="../assets/images/logos/golang.svg" class="w-full h-full object-contain"
                                    alt="logo" />
                            </div>
                            <div class="flex flex-col justify-center gap-1">
                                <p class="font-bold text-lg">Golang</p>
                                <p class="font-semibold text-xs leading-[170%] text-belibang-grey">
                                    Back-End Development
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- <footer class="bg-[#181818] py-[34px]">
        <div class="container max-w-[1130px] mx-auto flex flex-col gap-[66px]">
            <div class="flex justify-between">
                <div class="flex flex-col justify-between">
                    <div class="flex shrink-0">
                        <img src="../assets/images/logos/logo.svg" alt="logo" />
                    </div>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold text-sm">Connect with us</p>
                        <div class="flex items-center gap-5">
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="../assets/images/logos/dribbble.svg" class="w-6 h-6" alt="icon" />
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="../assets/images/logos/facebook.svg" class="w-6 h-6" alt="icon" />
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="../assets/images/logos/apple.svg" class="w-6 h-6" alt="icon" />
                            </a>
                            <a href=""
                                class="w-9 h-9 flex shrink-0 rounded-full overflow-hidden border border-[#595959] items-center justify-center">
                                <img src="../assets/images/logos/figma.svg" class="w-6 h-6" alt="icon" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="flex gap-[72px]">
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Browse</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">All Products</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Templates</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Ebooks</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Courses</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Fonts</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Platform</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">All-Access Pass</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Become an author</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Affiliate program</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Terms & Licensing</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Customer service</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">FAQ</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Orders</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Payments</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">refunds</a>
                        </div>
                    </div>
                    <div class="flex flex-col gap-8">
                        <p class="font-semibold text-sm">Contact us</p>
                        <div class="flex flex-col gap-[18px]">
                            <a href="" class="text-belibang-grey font-semibold text-xs">About us</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Company</a>
                            <a href="" class="text-belibang-grey font-semibold text-xs">Careers</a>
                        </div>
                    </div>
                </div>
            </div>
            <p class="text-[10px] text-[#595959]">© 2024, Belibang LLC.</p>
        </div>
    </footer> --}}

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
</body>

</html>
