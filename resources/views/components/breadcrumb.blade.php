@props(['items'])

<nav class="flex w-full overflow-x-auto text-sm sm:text-base max-w-7xl mx-auto px-5" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 sm:space-x-2">
        @foreach ($items as $index => $item)
            <li class="inline-flex items-center">
                @if (isset($item['url']))
                    <a href="{{ $item['url'] }}"
                        class="inline-flex items-center text-gray-400 hover:text-white transition-colors">
                        @if ($index === 0)
                            <!-- Home icon modern -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="w-4 h-4 mr-1 text-gray-400 group-hover:text-white transition-colors duration-300"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 9.75L12 3l9 6.75V21a1 1 0 01-1 1h-5.25a.75.75 0 01-.75-.75V15h-4.5v6.25c0 .414-.336.75-.75.75H4a1 1 0 01-1-1V9.75z" />
                            </svg>
                        @endif
                        {{ $item['label'] }}
                    </a>
                @else
                    <span class="text-white font-medium">{{ $item['label'] }}</span>
                @endif
            </li>

            @if (!$loop->last)
                <!-- Separator -->
                <li>
                    <svg class="w-4 h-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </li>
            @endif
        @endforeach
    </ol>
</nav>
