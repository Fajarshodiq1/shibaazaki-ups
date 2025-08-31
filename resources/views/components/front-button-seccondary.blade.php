@props(['href' => '#'])

<a href="{{ $href }}"
    {{ $attributes->merge(['class' => '"px-4 sm:px-6 lg:px-8 py-2.5 sm:py-3 lg:py-4 border-2 border-gray-600 rounded-full transition-all duration-300 flex items-center justify-center gap-2 text-sm sm:text-base lg:text-lg font-medium hover:border-blue-500 hover:text-blue-500 hover:shadow-md transform hover:-translate-y-0.5 w-full sm:w-fit']) }}>
    {{ $slot }}
</a>
