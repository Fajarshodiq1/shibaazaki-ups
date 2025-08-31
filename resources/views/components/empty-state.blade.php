@props([
    'title' => 'Tidak ada data',
    'message' => 'Data akan muncul di sini.',
    'icon' => null,
])

<div class="col-span-full text-center py-12">
    <div class="w-16 h-16 mx-auto mb-4 bg-belibang-dark-grey rounded-full flex items-center justify-center">
        @if ($icon)
            {!! $icon !!}
        @else
            <!-- default icon -->
            <svg class="w-8 h-8 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
            </svg>
        @endif
    </div>
    <h3 class="text-lg font-medium text-white mb-2">{{ $title }}</h3>
    <p class="text-gray-400">{{ $message }}</p>
</div>
