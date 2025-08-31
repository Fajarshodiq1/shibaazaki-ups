<div class="flex justify-between items-center">
    <div>
        <h2 class="font-bold text-base md:text-lg xl:text-2xl text-gray-900 leading-tight">
            {{ $title }}
        </h2>
        @if ($subtitle)
            <p class="text-gray-600  text-xs lg:text-sm mt-1">{{ $subtitle }}</p>
        @endif
    </div>

    @if ($buttonRoute && $buttonText)
        <a href="{{ route($buttonRoute) }}"
            class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-blue-600 to-blue-700 
                   hover:from-blue-700 hover:to-blue-800 text-white font-semibold rounded-lg 
                   shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-200">
            {{ $buttonText }}
        </a>
    @endif
</div>
