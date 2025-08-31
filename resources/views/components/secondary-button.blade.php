@props(['href' => '#'])

<a href="{{ $href }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center px-4 py-2 
                            bg-gradient-to-r from-gray-200 to-gray-300 
                            hover:from-gray-300 hover:to-gray-400 
                            text-gray-800 font-semibold rounded-lg 
                            shadow-md hover:shadow-lg 
                            transform hover:scale-105 
                            transition duration-200 ease-in-out',
    ]) }}>
    {{ $slot }}
</a>
