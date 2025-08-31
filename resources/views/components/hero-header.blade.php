<header class="w-full pt-28 pb-8 sm:pt-24 sm:pb-12 bg-cover bg-no-repeat bg-center relative z-0"
    style="background-image: url('{{ $background }}');">

    <div class="container max-w-7xl px-5 mx-auto flex flex-col items-center justify-center gap-6 sm:gap-8 z-10">

        <!-- Judul -->
        <div class="flex flex-col gap-2 text-center w-fit mt-10 mb-2 sm:mb-3 sm:mt-20 z-10">
            <h1 class="font-semibold text-3xl sm:text-4xl md:text-5xl lg:text-[60px] leading-snug sm:leading-[120%]">
                {{ $title }}
            </h1>
            {{-- subtitle --}}
            <p class="text-base lg:text-xl text-belibang-grey">
                {{ $subtitle }}
            </p>
        </div>

        <!-- Search Bar (Opsional & Dinamis) -->
        @if ($searchable)
            <div class="flex w-full justify-center mb-8 sm:mb-10 z-10 px-4">
                <form method="GET" action="{{ $searchAction }}"
                    class="group/search-bar flex items-center p-3 bg-belibang-darker-grey ring-1 ring-[#414141] hover:ring-[#888888] w-full max-w-full sm:max-w-[480px] md:max-w-[560px] rounded-full transition-all duration-300">
                    <div class="relative flex-1">
                        <!-- Search Icon -->
                        <button type="submit" class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <img src="{{ asset('assets/images/icons/search-normal.svg') }}" alt="icon"
                                class="w-5 h-5 sm:w-6 sm:h-6">
                        </button>

                        <!-- Input -->
                        <input type="text" name="{{ $searchName }}" id="searchInput"
                            value="{{ request($searchName) }}"
                            class="bg-belibang-darker-grey w-full pl-9 pr-10 text-sm sm:text-base focus:outline-none placeholder:text-[#595959]"
                            placeholder="{{ $searchPlaceholder }}" />

                        <!-- Reset Button -->
                        <button type="button" id="resetButton"
                            class="close-button {{ request($searchName) ? 'flex' : 'hidden' }} w-8 h-8 bg-[url('{{ asset('assets/images/icons/close.svg') }}')] hover:bg-[url('{{ asset('assets/images/icons/close-white.svg') }}')] transition-all duration-300 appearance-none absolute top-1/2 -translate-y-1/2 right-0 mr-2">
                        </button>
                    </div>
                </form>
            </div>
        @endif
    </div>

    <!-- Overlay -->
    <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
</header>
