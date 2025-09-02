@extends('layouts.template')
{{-- seo --}}
@section('title', 'Artikel - PT Shibaazaki')
@section('meta_title', 'Artikel - PT Shibaazaki')
@section('meta_description', 'Temukan artikel terbaru seputar UPS dan solusi daya tak terputus di Shibaazaki.')
@section('meta_keywords', 'artikel, shibaazaki, ups, solusi daya, berita')
@section('content')
    <x-hero-header title="Artikel Terbaru" subtitle="Kami menyediakan berbagai Artikel berkualitas" />
    <x-breadcrumb :items="[['label' => 'Beranda', 'url' => route('front.home.index')], ['label' => 'Artikel']]" />
    <x-search-bar :action="route('front.post.index')" placeholder="Cari artikel..." :collection="$posts" label="artikel" />
    <section class="container max-w-7xl mx-auto px-5 mb-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse ($posts as $item)
                <x-card :title="Str::limit($item->title, 50)" :description="Str::limit($item->content, 120)" :image="Storage::url($item->thumbnail)" :href="route('front.post.show', $item->slug)" variant="product"
                    image-position="top">
                    <div class="flex items-center justify-between text-sm text-gray-500 mt-3">
                        <span>{{ $item->author->name }}</span>
                        <span>{{ $item->published_at->format('M d, Y') }}</span>
                    </div>
                </x-card>
            @empty
                <x-empty-state message="Artikel akan muncul di sini." />
            @endforelse
        </div>

        <!-- Pagination -->
        @if ($posts->hasPages())
            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>
        @endif
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const resetButton = document.getElementById('resetButton');
            const form = searchInput.closest('form');

            // Show/hide reset button based on input content
            function toggleResetButton() {
                if (searchInput.value.trim() !== '') {
                    resetButton.classList.remove('hidden');
                    resetButton.classList.add('flex');
                } else {
                    resetButton.classList.add('hidden');
                    resetButton.classList.remove('flex');
                }
            }

            // Handle Enter key press
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    if (this.value.trim() !== '') {
                        form.submit();
                    } else {
                        // If empty, redirect to show all posts
                        window.location.href = '{{ route('front.post.index') }}';
                    }
                }
            });

            // Auto-submit after user stops typing (debounced)
            let searchTimeout;
            searchInput.addEventListener('input', function() {
                toggleResetButton();
                clearTimeout(searchTimeout);

                const searchValue = this.value.trim();

                searchTimeout = setTimeout(() => {
                    if (searchValue !== '') {
                        // If there's text and at least 3 characters, search
                        if (searchValue.length >= 3) {
                            form.submit();
                        }
                    } else {
                        // If empty, immediately redirect to show all posts
                        if ('{{ request('search') }}') {
                            window.location.href = '{{ route('front.post.index') }}';
                        }
                    }
                }, 500); // Reduced to 0.5 second for faster response when clearing
            });

            // Handle backspace and delete keys for immediate response when clearing
            searchInput.addEventListener('keyup', function(e) {
                if ((e.key === 'Backspace' || e.key === 'Delete') && this.value.trim() === '') {
                    clearTimeout(searchTimeout);
                    if ('{{ request('search') }}') {
                        window.location.href = '{{ route('front.post.index') }}';
                    }
                }
            });
        });

        // Clear search function
        function clearSearch() {
            const searchInput = document.getElementById('searchInput');
            searchInput.value = '';

            // Redirect to page without search parameter
            window.location.href = '{{ route('front.post.index') }}';
        }
    </script>
@endsection
