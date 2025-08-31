@props([
    'type' => 'success', // success, error, warning, info
    'message' => '',
])

@php
    $colors = [
        'success' => 'bg-green-50 border-green-400 text-green-700',
        'error' => 'bg-red-50 border-red-400 text-red-700',
        'warning' => 'bg-yellow-50 border-yellow-400 text-yellow-700',
        'info' => 'bg-blue-50 border-blue-400 text-blue-700',
    ];

    $icons = [
        'success' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
        'error' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2.5L13.732 4c-.77-.833-1.964-.833-2.732 0L3.732 16.5c-.77.833.192 2.5 1.732 2.5z"></path>',
        'warning' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4m0 4h.01M12 2a10 10 0 100 20 10 10 0 000-20z"></path>',
        'info' => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M12 20a8 8 0 100-16 8 8 0 000 16z"></path>',
    ];
@endphp

<div class="mb-6 {{ $colors[$type] }} border-l-4 p-4 rounded-r-lg shadow-sm">
    <div class="flex items-center">
        <div class="flex-shrink-0">
            <svg class="h-5 w-5 {{ str_replace('bg-', 'text-', explode(' ', $colors[$type])[0]) }}" fill="none"
                stroke="currentColor" viewBox="0 0 24 24">
                {!! $icons[$type] !!}
            </svg>
        </div>
        <div class="ml-3">
            <p class="font-medium">{{ $message }}</p>
        </div>
    </div>
</div>
