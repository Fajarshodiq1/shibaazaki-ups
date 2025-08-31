@props([
    'href' => '#',
    'size' => 'md', // default ukuran
])

@php
    $baseClass =
        'rounded-full bg-gradient-to-r from-blue-500 to-green-500 text-white hover:from-blue-600 hover:to-green-600 transition-all duration-300 flex items-center justify-center gap-2 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5';

    // ukuran dinamis
    $sizes = [
        'sm' => 'px-4 py-3 text-sm',
        'md' => 'px-4 sm:px-6 py-2.5 sm:py-3 text-sm sm:text-base',
        'lg' => 'px-6 sm:px-8 py-3.5 sm:py-4 text-base sm:text-lg',
    ];

    $sizeClass = $sizes[$size] ?? $sizes['md'];
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => "$baseClass $sizeClass"]) }}>
    {{ $slot }}
</a>
