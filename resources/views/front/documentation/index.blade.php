@extends('layouts.template')
@section('content')
@section('title', 'Dokumentasi - Shibaazaki')
<x-hero-header title="Cari Dokumentasi Terbaru" subtitle="Kami menyediakan berbagai dokumentasi berkualitas" />
<x-breadcrumb :items="[['label' => 'Beranda', 'url' => route('pages.home')], ['label' => 'Dokumentasi']]" />
<x-search-bar :action="route('front.documentation.index')" placeholder="Cari dokumentasi..." :collection="$documentations" label="dokumentasi" />
<section class="max-w-7xl mx-auto px-4 sm:px-5 pb-20">
    <div class="grid grid-cols-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3 sm:gap-4 md:gap-5">
        @forelse ($documentations as $item)
            <div class="relative w-full flex items-end justify-start text-left bg-cover bg-center rounded-lg sm:rounded-xl overflow-hidden z-10 p-1 border border-belibang-dark-grey group cursor-pointer"
                style="height: 300px; background-image:url('{{ Storage::url($item->image) }}');"
                onclick="openLightbox('{{ Storage::url($item->image) }}', '{{ addslashes($item->title) }}', '{{ addslashes(strip_tags($item->content)) }}')">
                <!-- Gradient Overlay -->
                <div
                    class="absolute top-0 mt-12 sm:mt-16 md:mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900 group-hover:to-gray-800 transition-all duration-300">
                </div>
                <!-- Hover Overlay with Zoom Icon -->
                <div
                    class="absolute inset-0 bg-black/0 group-hover:bg-black/30 transition-all duration-300 flex items-center justify-center">
                    <div
                        class="opacity-0 group-hover:opacity-100 transition-all duration-300 transform scale-75 group-hover:scale-100">
                        <div
                            class="w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center">
                            <svg class="w-6 h-6 sm:w-7 sm:h-7 md:w-8 md:h-8 text-white" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                            </svg>
                        </div>
                    </div>
                </div>

                <!-- Date Badge -->
                <div
                    class="absolute top-0 right-0 left-0 mx-2 sm:mx-3 md:mx-5 mt-2 flex justify-between items-center z-20">
                    <div
                        class="flex flex-col items-center justify-center w-12 h-12 sm:w-14 sm:h-14 md:w-16 md:h-16 rounded-full bg-gray-800/80 text-white font-regular backdrop-blur-sm">
                        <span
                            class="text-lg sm:text-xl md:text-2xl font-semibold leading-tight">{{ $item->created_at->format('d') }}</span>
                        <span class="text-xs sm:text-sm -mt-1">{{ $item->created_at->format('M') }}</span>
                    </div>
                </div>

                <!-- Content -->
                <main
                    class="p-2 sm:p-3 md:p-5 z-20 group-hover:transform group-hover:translate-y-1 transition-transform duration-300">
                    <h1 class="text-xs sm:text-sm lg:text-lg font-semibold line-clamp-2 text-white mb-1 sm:mb-2">
                        {{ $item->title }}
                    </h1>
                    <div
                        class="text-xs sm:text-sm lg:text-base tracking-tight font-medium leading-tight sm:leading-6 lg:leading-7 font-regular text-gray-300 prose line-clamp-2">
                        {!! Str::limit(strip_tags($item->content), 80) !!}
                    </div>
                    <div class="mt-2 sm:mt-3 flex items-center text-xs sm:text-sm text-gray-400">
                        <svg class="w-3 h-3 sm:w-4 sm:h-4 mr-1" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                            </path>
                        </svg>
                        <span class="hidden sm:inline">Klik untuk melihat gambar</span>
                        <span class="sm:hidden">Lihat gambar</span>
                    </div>
                </main>
            </div>
        @empty
            <div class="col-span-2 sm:col-span-2 md:col-span-3 lg:col-span-4 text-center py-12">
                <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Tidak ada dokumentasi</h3>
                <p class="text-gray-500">Dokumentasi akan muncul di sini setelah ditambahkan.</p>
            </div>
        @endforelse
    </div>

    <!-- Lightbox Modal -->
    <div id="lightbox"
        class="fixed inset-0 bg-black/90 backdrop-blur-sm z-50 flex items-center justify-center p-4 opacity-0 invisible transition-all duration-300">
        <!-- Close Button -->
        <button onclick="closeLightbox()"
            class="absolute top-4 right-4 z-60 w-12 h-12 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-200">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                </path>
            </svg>
        </button>

        <!-- Navigation Buttons -->
        <button onclick="previousImage()"
            class="absolute left-4 top-1/2 -translate-y-1/2 z-60 w-12 h-12 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-200">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
        </button>

        <button onclick="nextImage()"
            class="absolute right-4 top-1/2 -translate-y-1/2 z-60 w-12 h-12 bg-white/20 hover:bg-white/30 backdrop-blur-sm rounded-full flex items-center justify-center transition-all duration-200">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
        </button>

        <!-- Image Container -->
        <div class="max-w-4xl max-h-full mx-auto flex flex-col items-center">
            <div class="relative mb-4 max-h-[70vh] overflow-hidden rounded-lg">
                <img id="lightbox-image" src="" alt="" class="max-w-full max-h-full object-contain">
            </div>

            <!-- Image Info -->
            <div class="bg-white/10 backdrop-blur-sm rounded-lg p-4 max-w-2xl text-center">
                <h3 id="lightbox-title" class="text-xl font-semibold text-white mb-2"></h3>
                <p id="lightbox-description" class="text-gray-300 text-sm leading-relaxed"></p>
            </div>
        </div>
    </div>
</section>
<script>
    function clearSearch() {
        document.getElementById('searchInput').value = '';
        window.location.href = "{{ route('front.documentation.index') }}";
    }
    let currentImageIndex = 0;
    let images = [];

    // Initialize images array
    document.addEventListener('DOMContentLoaded', function() {
        @if (isset($documentations) && $documentations->count() > 0)
            images = [
                @foreach ($documentations as $index => $item)
                    {
                        src: '{{ Storage::url($item->image) }}',
                        title: '{{ addslashes($item->title) }}',
                        description: '{{ addslashes(strip_tags($item->content)) }}'
                    }
                    @if (!$loop->last)
                        ,
                    @endif
                @endforeach
            ];
        @endif
    });

    function openLightbox(imageSrc, title, description) {
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDescription = document.getElementById('lightbox-description');

        // Find current image index
        currentImageIndex = images.findIndex(img => img.src === imageSrc);

        // Set image and content
        lightboxImage.src = imageSrc;
        lightboxImage.alt = title;
        lightboxTitle.textContent = title;
        lightboxDescription.textContent = description;

        // Show lightbox
        lightbox.classList.remove('opacity-0', 'invisible');
        lightbox.classList.add('opacity-100', 'visible');

        // Prevent body scroll
        document.body.style.overflow = 'hidden';

        // Add escape key listener
        document.addEventListener('keydown', handleKeyDown);
    }

    function closeLightbox() {
        const lightbox = document.getElementById('lightbox');

        // Hide lightbox
        lightbox.classList.remove('opacity-100', 'visible');
        lightbox.classList.add('opacity-0', 'invisible');

        // Restore body scroll
        document.body.style.overflow = 'auto';

        // Remove escape key listener
        document.removeEventListener('keydown', handleKeyDown);
    }

    function nextImage() {
        if (images.length === 0) return;

        currentImageIndex = (currentImageIndex + 1) % images.length;
        updateLightboxContent();
    }

    function previousImage() {
        if (images.length === 0) return;

        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        updateLightboxContent();
    }

    function updateLightboxContent() {
        const currentImage = images[currentImageIndex];
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxTitle = document.getElementById('lightbox-title');
        const lightboxDescription = document.getElementById('lightbox-description');

        // Add fade effect
        lightboxImage.style.opacity = '0';

        setTimeout(() => {
            lightboxImage.src = currentImage.src;
            lightboxImage.alt = currentImage.title;
            lightboxTitle.textContent = currentImage.title;
            lightboxDescription.textContent = currentImage.description;
            lightboxImage.style.opacity = '1';
        }, 150);
    }

    function handleKeyDown(event) {
        switch (event.key) {
            case 'Escape':
                closeLightbox();
                break;
            case 'ArrowLeft':
                previousImage();
                break;
            case 'ArrowRight':
                nextImage();
                break;
        }
    }

    // Close lightbox when clicking outside image
    document.getElementById('lightbox').addEventListener('click', function(event) {
        if (event.target === this) {
            closeLightbox();
        }
    });

    // Add smooth transition for image loading
    document.getElementById('lightbox-image').addEventListener('load', function() {
        this.style.opacity = '1';
    });
</script>
@endsection
