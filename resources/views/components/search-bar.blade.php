@props([
    'action' => '#', // route tujuan form
    'placeholder' => 'Search...',
    'collection' => null, // paginator/collection
    'label' => 'item', // label untuk count (ex: brand, artikel, produk)
    'search' => request('search'), // default ambil dari query
])

<section class="container max-w-7xl mx-auto mb-8 md:mb-12 px-5 mt-5">
    <div class="bg-[#181818] rounded-xl md:rounded-[18px] p-4 sm:p-6 md:p-8">
        <div class="flex flex-col sm:flex-row gap-4 items-start sm:items-center justify-between">

            <!-- Search Form -->
            <form method="GET" action="{{ $action }}" class="flex-1 w-full sm:max-w-md">
                <div class="relative">
                    <!-- Icon -->
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                    </div>

                    <!-- Input -->
                    <input type="text" name="search" value="{{ $search }}" placeholder="{{ $placeholder }}"
                        class="block w-full pl-10 pr-4 py-3 border border-gray-600 rounded-full bg-[#2a2a2a] text-white placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-200" />

                    <!-- Clear Button -->
                    @if ($search)
                        <a href="{{ $action }}" class="absolute inset-y-0 right-0 pr-3 flex items-center">
                            <svg class="h-5 w-5 text-gray-400 hover:text-white transition-colors" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </a>
                    @endif
                </div>
            </form>

            <!-- Search Results Info -->
            <div class="flex flex-col sm:flex-row gap-2 sm:gap-4 items-start sm:items-center text-sm text-gray-400">
                @if ($search)
                    <span class="whitespace-nowrap">
                        Found {{ $collection?->total() ?? 0 }}
                        {{ Str::plural($label, $collection?->total() ?? 0) }}
                        for <span class="text-white font-medium">"{{ $search }}"</span>
                    </span>
                @else
                    <span class="whitespace-nowrap">
                        Showing {{ $collection?->total() ?? 0 }}
                        {{ Str::plural($label, $collection?->total() ?? 0) }}
                    </span>
                @endif
            </div>
        </div>
    </div>
</section>
