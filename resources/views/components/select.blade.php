@props([
    'id' => null,
    'name' => null,
    'label' => null,
    'options' => [], // array: ['value' => 'label']
    'selected' => null,
    'placeholder' => '-- Pilih Opsi --',
    'required' => false,
])

<div class="mb-4">
    @if ($label)
        <label for="{{ $id ?? $name }}" class="block text-sm font-medium text-gray-700 mb-2">
            {{ $label }}
            @if ($required)
                <span class="text-red-500">*</span>
            @endif
        </label>
    @endif

    <div class="relative">
        <select id="{{ $id ?? $name }}" name="{{ $name }}" @if ($required) required @endif
            {{ $attributes->merge([
                'class' =>
                    'block w-full text-lg py-3 px-4 pr-10 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200 bg-white appearance-none',
            ]) }}>
            @if ($placeholder)
                <option value="" disabled {{ !$selected ? 'selected' : '' }}>
                    {{ $placeholder }}
                </option>
            @endif

            @forelse ($options as $value => $text)
                <option value="{{ $value }}" {{ $selected == $value ? 'selected' : '' }}>
                    {{ $text }}
                </option>
            @empty
                <option value="" disabled>Tidak ada opsi tersedia</option>
            @endforelse
        </select>

        <!-- Custom dropdown arrow -->
        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </div>

    @error($name)
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
