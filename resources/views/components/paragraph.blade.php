<p
    {{ $attributes->merge([
        'class' => 'text-[15px] md:text-base lg:text-lg text-gray-300 leading-relaxed text-left md:text-justify',
    ]) }}>
    {{ $slot }}
</p>
