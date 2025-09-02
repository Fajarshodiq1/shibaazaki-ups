<nav class="w-full fixed top-0 bg-[#00000010] backdrop-blur-lg z-50">
    <div class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-[74px]">

            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="flex w-[120px] sm:w-[154px] shrink-0 items-center">
                    <img src="{{ asset('assets/images/logos/logo-shibaazaki.png') }}" class="h-20" alt="logo">
                    <span class="text-belibang-grey font-semibold text-xl hidden lg:block">Shibaazaki</span>
                </a>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center gap-[26px]">
                <ul class="flex gap-6 items-center">
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="/">Beranda</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ route('front.profile.show') }}">Profil</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ route('front.category.index') }}">Layanan</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ route('front.ups-brands.index') }}">UPS</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ route('rental.index') }}">Rental</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ route('front.post.index') }}">Artikel</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ route('front.documentation.index') }}">Dokumentasi</a>
                    </li>
                    <li class="text-belibang-grey hover:text-belibang-light-grey transition-all duration-300">
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
                </ul>
            </div>

            <!-- Desktop Auth Buttons -->
            <div class="hidden lg:flex gap-6 items-center">
                @guest
                    <x-front-button-primary href="/wa" size="sm">
                        <svg aria-label="WhatsApp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="24"
                            height="24" fill="currentColor" class="w-5 h-5">
                            <path
                                d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <span>Hubungi Kami</span>
                    </x-front-button-primary>
                @endguest

                @auth
                    <!-- Profile Dropdown -->
                    <div class="relative" x-data="{ open: false }" @click.away="open = false">
                        <!-- Profile Button -->
                        <button @click="open = !open"
                            class="flex items-center gap-3 p-2 rounded-xl hover:bg-[#1A1A1A] transition-all duration-200 group"
                            :class="{ 'bg-[#1A1A1A]': open }">
                            <!-- Profile Image -->
                            <div
                                class="w-9 h-9 rounded-full overflow-hidden ring-2 ring-transparent group-hover:ring-belibang-grey/20 transition-all duration-200">
                                @if (auth()->user()->profile_image)
                                    <img src="{{ Storage::url(auth()->user()->profile_image) }}"
                                        alt="{{ auth()->user()->name }}" class="w-full h-full object-cover">
                                @else
                                    <div
                                        class="w-full h-full bg-gradient-to-br from-belibang-grey to-belibang-dark-grey flex items-center justify-center">
                                        <span class="text-white text-sm font-medium">
                                            {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                        </span>
                                    </div>
                                @endif
                            </div>

                            <!-- User Info -->
                            <div class="hidden xl:flex flex-col items-start">
                                <span class="text-white text-sm font-medium leading-tight">
                                    {{ Str::limit(auth()->user()->name, 15) }}
                                </span>
                                <span class="text-belibang-grey text-xs leading-tight">
                                    {{ Str::limit(auth()->user()->email, 20) }}
                                </span>
                            </div>

                            <!-- Chevron Icon -->
                            <svg class="w-4 h-4 text-belibang-grey transition-transform duration-200"
                                :class="{ 'rotate-180': open }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                                </path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 mt-2 w-64 bg-[#1A1A1A] border border-belibang-dark-grey rounded-xl shadow-xl z-50 py-2"
                            style="display: none;">

                            <!-- User Info (Mobile) -->
                            <div class="xl:hidden px-4 py-3 border-b border-belibang-dark-grey">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full overflow-hidden">
                                        @if (auth()->user()->profile_image)
                                            <img src="{{ Storage::url(auth()->user()->profile_image) }}"
                                                alt="{{ auth()->user()->name }}" class="w-full h-full object-cover">
                                        @else
                                            <div
                                                class="w-full h-full bg-gradient-to-br from-belibang-grey to-belibang-dark-grey flex items-center justify-center">
                                                <span class="text-white text-sm font-medium">
                                                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                                                </span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="flex flex-col">
                                        <span class="text-white text-sm font-medium">{{ auth()->user()->name }}</span>
                                        <span class="text-belibang-grey text-xs">{{ auth()->user()->email }}</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Menu Items -->
                            <div class="py-1">
                                <!-- Profile -->
                                <a href="{{ route('dashboard') }}"
                                    class="flex items-center gap-3 px-4 py-2 text-sm text-belibang-light-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                    </svg>
                                    Dashboard
                                </a>
                                <!-- Settings -->
                                <a href="{{ route('profile.edit') }}"
                                    class="flex items-center gap-3 px-4 py-2 text-sm text-belibang-light-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-200">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                        </path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    </svg>
                                    Settings
                                </a>
                            </div>
                            <!-- Divider -->
                            <div class="border-t border-belibang-dark-grey my-1"></div>

                            <!-- Logout -->
                            <form method="POST" action="{{ route('logout') }}" class="py-1">
                                @csrf
                                <button type="submit"
                                    class="flex items-center gap-3 px-4 py-2 text-sm text-red-400 hover:bg-red-500/10 hover:text-red-300 transition-all duration-200 w-full text-left">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                        </path>
                                    </svg>
                                    Sign out
                                </button>
                            </form>
                        </div>
                    </div>
                @endauth
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
                <a href="/"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Beranda</a>
                <a href="{{ route('front.profile.show') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Profil</a>
                <a href="{{ route('front.category.index') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Layanan</a>
                <a href="{{ route('front.ups-brands.index') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">UPS</a>
                <a href="{{ route('rental.index') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Rental</a>
                <a href="{{ route('front.post.index') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Artikel</a>
                <a href="{{ route('front.documentation.index') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Dokumentasi</a>
                <a href="{{ url('/contact') }}"
                    class="block py-2 text-belibang-grey hover:text-white transition-colors duration-300">Contact</a>

                <!-- Mobile Auth / CTA Buttons -->
                <div class="pt-4 border-t border-belibang-dark-grey space-y-3">
                    <a href="https://wa.me/6281318222618"
                        class="block py-2 px-4 text-center rounded-lg text-belibang-grey border border-belibang-dark-grey hover:bg-[#2A2A2A] hover:text-white transition-all duration-300">
                        Hubungi Kami
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
    // Navbar JavaScript Functionality
    document.addEventListener('DOMContentLoaded', function() {

        // Mobile Menu Toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');
        const hamburger = document.getElementById('hamburger');
        const closeIcon = document.getElementById('close');

        if (mobileMenuButton && mobileMenu) {
            mobileMenuButton.addEventListener('click', function() {
                // Toggle mobile menu visibility
                mobileMenu.classList.toggle('hidden');

                // Toggle hamburger/close icons
                hamburger.classList.toggle('hidden');
                closeIcon.classList.toggle('hidden');
            });
        }

        // Desktop Categories Dropdown
        const desktopMenuButton = document.getElementById('desktop-menu-button');
        const desktopDropdown = document.getElementById('desktop-dropdown');
        const desktopArrow = document.getElementById('desktop-arrow');

        if (desktopMenuButton && desktopDropdown) {
            desktopMenuButton.addEventListener('click', function(e) {
                e.stopPropagation();

                // Toggle dropdown visibility
                desktopDropdown.classList.toggle('hidden');

                // Rotate arrow
                desktopArrow.classList.toggle('rotate-180');
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!desktopMenuButton.contains(e.target) && !desktopDropdown.contains(e.target)) {
                    desktopDropdown.classList.add('hidden');
                    desktopArrow.classList.remove('rotate-180');
                }
            });
        }

        // Mobile Categories Dropdown
        const mobileCategoriesButton = document.getElementById('mobile-categories-button');
        const mobileCategories = document.getElementById('mobile-categories');
        const mobileArrow = document.getElementById('mobile-arrow');

        if (mobileCategoriesButton && mobileCategories) {
            mobileCategoriesButton.addEventListener('click', function() {
                // Toggle categories visibility
                mobileCategories.classList.toggle('hidden');

                // Rotate arrow
                mobileArrow.classList.toggle('rotate-180');
            });
        }

        // Close mobile menu when window is resized to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 1024) { // lg breakpoint
                // Hide mobile menu
                if (mobileMenu) {
                    mobileMenu.classList.add('hidden');
                    hamburger.classList.remove('hidden');
                    closeIcon.classList.add('hidden');
                }

                // Hide mobile categories
                if (mobileCategories) {
                    mobileCategories.classList.add('hidden');
                    mobileArrow.classList.remove('rotate-180');
                }
            } else {
                // Hide desktop dropdown on mobile
                if (desktopDropdown) {
                    desktopDropdown.classList.add('hidden');
                    desktopArrow.classList.remove('rotate-180');
                }
            }
        });

        // Handle dropdown item clicks
        const dropdownItems = document.querySelectorAll('#desktop-dropdown > div, #mobile-categories a');

        dropdownItems.forEach(item => {
            item.addEventListener('click', function() {
                // Add click handler for dropdown items
                console.log('Dropdown item clicked:', this.textContent.trim());

                // Close dropdowns after selection (optional)
                if (desktopDropdown) {
                    desktopDropdown.classList.add('hidden');
                    desktopArrow.classList.remove('rotate-180');
                }

                if (mobileCategories && window.innerWidth < 1024) {
                    mobileCategories.classList.add('hidden');
                    mobileArrow.classList.remove('rotate-180');
                }
            });
        });

        // Smooth scroll behavior for anchor links (if needed)
        const anchorLinks = document.querySelectorAll('a[href^="#"]');
        anchorLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href');
                const targetElement = document.querySelector(targetId);

                if (targetElement) {
                    e.preventDefault();
                    targetElement.scrollIntoView({
                        behavior: 'smooth'
                    });

                    // Close mobile menu after navigation
                    if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                        hamburger.classList.remove('hidden');
                        closeIcon.classList.add('hidden');
                    }
                }
            });
        });
    });

    // Optional: Add keyboard navigation support
    document.addEventListener('keydown', function(e) {
        // Close dropdowns with Escape key
        if (e.key === 'Escape') {
            const desktopDropdown = document.getElementById('desktop-dropdown');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileCategories = document.getElementById('mobile-categories');

            if (desktopDropdown && !desktopDropdown.classList.contains('hidden')) {
                desktopDropdown.classList.add('hidden');
                document.getElementById('desktop-arrow').classList.remove('rotate-180');
            }

            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
                document.getElementById('hamburger').classList.remove('hidden');
                document.getElementById('close').classList.add('hidden');
            }

            if (mobileCategories && !mobileCategories.classList.contains('hidden')) {
                mobileCategories.classList.add('hidden');
                document.getElementById('mobile-arrow').classList.remove('rotate-180');
            }
        }
    });
</script>
