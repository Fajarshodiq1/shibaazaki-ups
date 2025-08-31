@props(['disabled' => false, 'label' => null, 'icon' => null, 'type' => 'text'])

<div class="w-full">
    {{-- Label --}}
    @if ($label)
        <label class="block mb-2 text-sm font-medium text-gray-700">
            {{ $label }}
        </label>
    @endif

    <div class="relative">
        {{-- Icon di dalam input --}}
        @if ($icon)
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-400">
                {!! $icon !!}
            </span>
        @endif

        <input type="{{ $type }}" @disabled($disabled)
            {{ $attributes->merge([
                'class' =>
                    'w-full rounded-xl border border-gray-200 bg-white shadow-sm
                                focus:border-indigo-400 focus:ring focus:ring-indigo-300 focus:ring-opacity-40
                                placeholder-gray-400 text-gray-700 text-sm 
                                px-4 py-3 ' .
                    ($icon ? 'pl-10' : '') .
                    ' transition ease-in-out duration-200',
            ]) }}>
    </div>
</div>
