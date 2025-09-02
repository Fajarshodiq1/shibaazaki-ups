@props(['type' => 'submit'])

<button type="{{ $type }}"
    {{ $attributes->merge([
        'class' => 'inline-flex items-center justify-center text-center w-full md:w-fit px-4 py-2 
                                bg-gradient-to-r from-blue-600 to-blue-700 
                                hover:from-blue-700 hover:to-blue-800 
                                text-white font-semibold rounded-lg 
                                shadow-lg hover:shadow-xl transform hover:scale-105 
                                transition duration-200',
    ]) }}>
    {{ $slot }}
</button>
