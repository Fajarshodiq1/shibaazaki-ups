@extends('layouts.template')
@section('title', $post->title, '- PT Shibaazaki')
{{-- meta title --}}
@section('meta_title', $post->meta_title ?? $post->title)
{{-- meta description --}}
@section('meta_description', $post->meta_description ?? $post->excerpt)
{{-- meta keywords --}}
@section('meta_keywords', $post->meta_keywords ?? '')

@section('content')
    {{-- Hero Header Section --}}
    <header class="w-full pt-16 md:pt-[74px] pb-16 md:pb-[103px] relative z-0">
        <div class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 flex flex-col items-center justify-center z-10">
            <div class="flex flex-col gap-4 mt-7 z-10 text-center">
                <h1 class="font-semibold text-2xl sm:text-3xl md:text-4xl lg:text-[55px] leading-tight text-white">
                    {{ $post->title }}
                </h1>
            </div>
        </div>

        {{-- Background Image --}}
        <div class="background-image w-full h-full absolute top-0 overflow-hidden z-0">
            <img src="{{ Storage::url($post->thumbnail) }}" class="w-full h-full object-cover" alt="{{ $post->title }}"
                loading="lazy">
        </div>

        {{-- Gradient Overlays --}}
        <div class="w-full h-1/3 absolute bottom-0 bg-gradient-to-b from-transparent to-black/90 z-0"></div>
        <div class="w-full h-full absolute top-0 bg-black/70 z-0"></div>
    </header>

    {{-- Main Content Section --}}
    <section id="DetailsContent"
        class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 mb-8 relative -top-8 md:-top-[70px]">
        <div class="flex flex-col gap-8">
            {{-- Featured Image --}}
            <div
                class="w-full max-w-full h-48 sm:h-64 md:h-80 lg:h-[700px] flex shrink-0 rounded-2xl overflow-hidden shadow-2xl">
                <img src="{{ Storage::url($post->thumbnail) }}" class="w-full h-full object-cover" alt="{{ $post->title }}"
                    loading="lazy">
            </div>
            {{-- Content and Sidebar Layout --}}
            <div class="flex flex-col lg:flex-row gap-8 relative lg:-mt-[93px]">
                {{-- Main Content --}}
                <div
                    class="flex flex-col p-6 md:p-[30px] gap-5 bg-belibang-darker-grey backdrop-blur-sm rounded-2xl w-full lg:w-[700px] shrink-0 lg:mt-[90px] h-fit shadow-xl">

                    {{-- Social Share Section --}}
                    <div class="flex flex-col gap-4 border-b border-gray-700 pb-6">
                        <h3 class="font-semibold text-lg text-white">Bagikan Artikel Ini</h3>
                        <div class="flex flex-wrap gap-3">
                            {{-- Facebook Share --}}
                            <button onclick="shareToFacebook()"
                                class="flex items-center gap-2 px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-full text-white text-sm font-medium transition-colors duration-200 group">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                                </svg>
                                <span class="hidden sm:inline">Facebook</span>
                            </button>

                            {{-- LinkedIn Share --}}
                            <button onclick="shareToLinkedIn()"
                                class="flex items-center gap-2 px-4 py-2 bg-blue-700 hover:bg-blue-800 rounded-full text-white text-sm font-medium transition-colors duration-200 group">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z" />
                                </svg>
                                <span class="hidden sm:inline">LinkedIn</span>
                            </button>

                            {{-- Instagram Share (Open Instagram with copy text) --}}
                            <button onclick="shareToInstagram()"
                                class="flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-full text-white text-sm font-medium transition-all duration-200 group">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                                </svg>
                                <span class="hidden sm:inline">Instagram</span>
                            </button>

                            {{-- Copy Link --}}
                            <button onclick="copyToClipboard()" id="copyBtn"
                                class="flex items-center gap-2 px-4 py-2 bg-gray-700 hover:bg-gray-600 rounded-full text-white text-sm font-medium transition-colors duration-200 group">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    id="copyIcon">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z">
                                    </path>
                                </svg>
                                <span class="hidden sm:inline" id="copyText">Copy Link</span>
                            </button>
                        </div>
                    </div>

                    {{-- Article Content --}}
                    <div class="prose prose-invert prose-lg max-w-none text-white text-[14px] md:text-[16px]">
                        <div class="leading-relaxed">
                            {!! $post->content !!}
                        </div>
                    </div>
                </div>

                {{-- Sidebar --}}
                <div class="flex flex-col w-full lg:w-[366px] gap-6 lg:gap-[30px] flex-nowrap">
                    {{-- Services Section --}}
                    <div class="p-[2px] rounded-2xl flex w-full h-fit bg-gradient-to-r from-green-400 to-blue-500">
                        <div class="w-full p-6 md:p-[28px] bg-belibang-darker-grey rounded-2xl flex flex-col gap-6">
                            <div class="flex flex-col gap-4">
                                <h2
                                    class="font-semibold text-2xl md:text-4xl bg-clip-text text-transparent bg-gradient-to-r from-green-400 to-blue-500 text-center mb-4">
                                    Layanan Kami
                                </h2>

                                {{-- Categories List --}}
                                <div class="space-y-3">
                                    @forelse ($categories as $item)
                                        <article class="group">
                                            <a href="{{ route('front.category.show', $item->slug ?? $item->id) }}"
                                                class="flex gap-4 border border-gray-700 hover:border-gray-600 rounded-3xl p-3 md:p-4 items-center
                                                        hover:scale-[1.02] hover:shadow-lg hover:bg-gray-800/50
                                                        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900
                                                        transition-all duration-300 ease-out"
                                                aria-label="View {{ $item->name }} category">

                                                {{-- Category Icon --}}
                                                <div
                                                    class="w-10 h-10 md:w-12 md:h-12 bg-gradient-to-br from-gray-700 to-gray-600 
                                                            rounded-xl overflow-hidden shrink-0 shadow-sm group-hover:shadow-md transition-all duration-300">
                                                    @if ($item->image)
                                                        <img src="{{ Storage::url($item->image) }}"
                                                            alt="{{ $item->name }} category icon"
                                                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300"
                                                            loading="lazy">
                                                    @else
                                                        <div
                                                            class="w-full h-full flex items-center justify-center text-gray-400">
                                                            <svg class="w-5 h-5 md:w-6 md:h-6" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    @endif
                                                </div>

                                                {{-- Category Content --}}
                                                <div class="flex flex-col gap-1 min-w-0 flex-1">
                                                    <h3
                                                        class="font-semibold text-sm md:text-base text-white group-hover:text-blue-400 transition-colors duration-200 truncate">
                                                        {{ $item->name }}
                                                    </h3>

                                                    @if ($item->description)
                                                        <div
                                                            class="text-gray-400 text-xs md:text-sm leading-relaxed line-clamp-2 group-hover:text-gray-300 transition-colors duration-200">
                                                            {!! Str::limit(strip_tags($item->description), 100) !!}
                                                        </div>
                                                    @endif

                                                    @if (isset($item->posts_count) && $item->posts_count > 0)
                                                        <span class="text-xs text-gray-500 mt-1">
                                                            {{ $item->posts_count }}
                                                            {{ Str::plural('item', $item->posts_count) }}
                                                        </span>
                                                    @endif
                                                </div>

                                                {{-- Arrow Indicator --}}
                                                <div
                                                    class="shrink-0 opacity-0 group-hover:opacity-100 transition-opacity duration-200">
                                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M9 5l7 7-7 7"></path>
                                                    </svg>
                                                </div>
                                            </a>
                                        </article>
                                    @empty
                                        {{-- Empty State --}}
                                        <div class="text-center py-8 md:py-12">
                                            <div
                                                class="w-12 h-12 md:w-16 md:h-16 mx-auto mb-4 bg-gray-800 rounded-full flex items-center justify-center">
                                                <svg class="w-6 h-6 md:w-8 md:h-8 text-gray-500" fill="none"
                                                    stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                                    </path>
                                                </svg>
                                            </div>
                                            <h3 class="text-base md:text-lg font-medium text-white mb-2">Tidak ada kategori
                                                ditemukan</h3>
                                            <p class="text-gray-400 text-sm">Kategori akan muncul di sini setelah
                                                ditambahkan.</p>

                                            @can('create', App\Models\Category::class)
                                                <a href="{{ route('admin.categories.create') }}"
                                                    class="inline-flex items-center gap-2 mt-4 px-4 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg transition-colors duration-200 text-sm">
                                                    <svg class="w-4 h-4" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M12 4v16m8-8H4"></path>
                                                    </svg>
                                                    Tambah Kategori
                                                </a>
                                            @endcan
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Company Info Card --}}
                    <div
                        class="w-full p-6 md:p-[30px] bg-belibang-darker-grey rounded-2xl flex flex-col gap-4 h-fit shadow-xl">
                        <div class="flex justify-between items-center">
                            <div class="flex gap-3 items-center">
                                <div
                                    class="w-10 h-10 md:w-12 md:h-12 rounded-full overflow-hidden flex shrink-0 bg-white shadow-md">
                                    <img src="http://127.0.0.1:8000/assets/images/logos/logo-shibaazaki.png"
                                        alt="PT Shibaazaki logo" class="w-full h-full object-cover" loading="lazy">
                                </div>
                                <div class="flex flex-col gap-1">
                                    <p class="font-semibold text-white text-sm md:text-base">PT Shibaazaki</p>
                                    <p class="text-gray-400 text-xs md:text-sm">
                                        <span class="font-semibold mr-1 text-white">183,409</span>
                                        Klien
                                    </p>
                                </div>
                            </div>
                            <a href="#" class="p-2 hover:bg-gray-800 rounded-full transition-colors duration-200">
                                <svg class="w-5 h-5 text-gray-400 hover:text-white transition-colors duration-200"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 5l7 7-7 7">
                                    </path>
                                </svg>
                            </a>
                        </div>
                        <p class="text-sm leading-relaxed text-gray-400">
                            UPS Terpercaya, Layanan Lengkap, Harga Bersahabat
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Related Posts Section --}}
    <section id="NewProduct"
        class="container max-w-[1230px] mx-auto px-4 sm:px-6 lg:px-8 mb-16 md:mb-[102px] flex flex-col gap-8">
        <h2 class="font-semibold text-2xl md:text-[32px] text-white">Postingan Lainnya</h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6">
            @forelse ($morePosts as $item)
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
    </section>

    {{-- JavaScript for Social Sharing --}}
    <script>
        // Get current page data
        const pageUrl = window.location.href;
        const pageTitle = document.querySelector('h1').textContent;
        const pageDescription = '{{ strip_tags($post->meta_description ?? ($post->excerpt ?? '')) }}';
        const pageImage = '{{ asset(Storage::url($post->thumbnail)) }}'; // Use asset() for full URL
        const siteName = 'PT Shibaazaki';

        // Facebook Share with detailed content
        function shareToFacebook() {
            // Facebook Sharer with more parameters
            const facebookParams = new URLSearchParams({
                u: pageUrl,
                quote: `${pageTitle}\n\n${pageDescription}`,
                hashtag: '#PTShibaazaki'
            });

            const facebookUrl = `https://www.facebook.com/sharer/sharer.php?${facebookParams.toString()}`;

            // Open in popup
            const popup = window.open(facebookUrl, 'facebook-share', 'width=600,height=400,scrollbars=yes,resizable=yes');

            // Focus on popup if it exists
            if (popup) popup.focus();

            // Analytics tracking (optional)
            trackSocialShare('facebook');
        }

        // LinkedIn Share with professional content
        function shareToLinkedIn() {
            const linkedInParams = new URLSearchParams({
                url: pageUrl,
                title: pageTitle,
                summary: pageDescription,
                source: siteName
            });

            const linkedInUrl = `https://www.linkedin.com/sharing/share-offsite/?${linkedInParams.toString()}`;

            // Open in popup
            const popup = window.open(linkedInUrl, 'linkedin-share', 'width=600,height=500,scrollbars=yes,resizable=yes');

            // Focus on popup if it exists
            if (popup) popup.focus();

            // Analytics tracking (optional)
            trackSocialShare('linkedin');
        }

        // Instagram Share (Enhanced with better formatting)
        function shareToInstagram() {
            // Create Instagram-friendly content
            const instagramContent = createInstagramContent();

            // Copy to clipboard
            copyToClipboardWithFallback(instagramContent)
                .then(() => {
                    // Show custom notification
                    showInstagramNotification();

                    // Detect device and open appropriate Instagram
                    setTimeout(() => {
                        openInstagramApp();
                    }, 1000);

                    // Analytics tracking
                    trackSocialShare('instagram');
                })
                .catch((error) => {
                    console.error('Copy failed:', error);
                    showErrorNotification('Gagal menyalin konten. Silakan coba lagi.');
                });
        }

        // Create Instagram-friendly content
        function createInstagramContent() {
            const hashtags = [
                '#PTShibaazaki',
                '#UPSTerpercaya',
                '#LayananLengkap',
                '#HargaBersahabat',
                '#Technology',
                '#Indonesia'
            ];

            let content = `✨ ${pageTitle} ✨\n\n`;

            if (pageDescription) {
                content += `📝 ${pageDescription}\n\n`;
            }

            content += `🔗 Baca selengkapnya:\n${pageUrl}\n\n`;
            content += `${hashtags.join(' ')}\n\n`;
            content += `#️⃣ Follow @ptshibaazaki untuk update terbaru!`;

            return content;
        }

        // Enhanced clipboard function with fallback
        async function copyToClipboardWithFallback(text) {
            try {
                // Modern browsers
                if (navigator.clipboard && window.isSecureContext) {
                    await navigator.clipboard.writeText(text);
                    return;
                }

                // Fallback for older browsers or non-secure contexts
                const textArea = document.createElement('textarea');
                textArea.value = text;
                textArea.style.position = 'fixed';
                textArea.style.left = '-999999px';
                textArea.style.top = '-999999px';
                document.body.appendChild(textArea);
                textArea.focus();
                textArea.select();

                const successful = document.execCommand('copy');
                document.body.removeChild(textArea);

                if (!successful) {
                    throw new Error('execCommand failed');
                }
            } catch (error) {
                throw error;
            }
        }

        // Open Instagram app based on device
        function openInstagramApp() {
            const userAgent = navigator.userAgent.toLowerCase();
            const isMobile = /iphone|ipad|ipod|android|blackberry|opera|mini|windows\sce|palm|smartphone|iemobile/i.test(
                userAgent);

            if (isMobile) {
                // Try to open Instagram app first
                const instagramAppUrl = 'instagram://app';
                const instagramWebUrl = 'https://www.instagram.com/';

                // Create a hidden iframe to try opening the app
                const iframe = document.createElement('iframe');
                iframe.style.display = 'none';
                iframe.src = instagramAppUrl;
                document.body.appendChild(iframe);

                // Fallback to web version after a short delay
                setTimeout(() => {
                    document.body.removeChild(iframe);
                    window.open(instagramWebUrl, '_blank');
                }, 2000);
            } else {
                // Desktop - open Instagram web
                window.open('https://www.instagram.com/', '_blank');
            }
        }

        // Show Instagram-specific notification
        function showInstagramNotification() {
            const message = `
        <div class="text-sm">
            <div class="font-semibold mb-2">📋 Konten Instagram telah disalin!</div>
            <div class="text-xs opacity-90">
                • Buka Instagram<br>
                • Buat post atau story baru<br>
                • Paste di caption
            </div>
        </div>
    `;
            showAdvancedNotification(message, 'instagram');
        }

        // Enhanced Copy Link function
        function copyToClipboard() {
            const shareText = `${pageTitle}\n\n${pageUrl}`;

            copyToClipboardWithFallback(shareText)
                .then(() => {
                    // Update button appearance
                    updateCopyButton(true);

                    // Show success notification
                    showNotification('🔗 Link berhasil disalin ke clipboard!');

                    // Reset button after delay
                    setTimeout(() => {
                        updateCopyButton(false);
                    }, 2000);

                    // Analytics tracking
                    trackSocialShare('copy_link');
                })
                .catch(() => {
                    showErrorNotification('Gagal menyalin link. Silakan coba lagi.');
                });
        }

        // Update copy button appearance
        function updateCopyButton(success) {
            const copyBtn = document.getElementById('copyBtn');
            const copyIcon = document.getElementById('copyIcon');
            const copyText = document.getElementById('copyText');

            if (!copyBtn || !copyIcon || !copyText) return;

            if (success) {
                copyBtn.classList.remove('bg-gray-700', 'hover:bg-gray-600');
                copyBtn.classList.add('bg-green-600', 'hover:bg-green-700');

                copyIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>';
                copyText.textContent = 'Tersalin!';
            } else {
                copyBtn.classList.remove('bg-green-600', 'hover:bg-green-700');
                copyBtn.classList.add('bg-gray-700', 'hover:bg-gray-600');

                copyIcon.innerHTML =
                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>';
                copyText.textContent = 'Copy Link';
            }
        }

        // Advanced notification system
        function showAdvancedNotification(message, type = 'success') {
            const colors = {
                success: 'bg-green-600',
                error: 'bg-red-600',
                info: 'bg-blue-600',
                instagram: 'bg-gradient-to-r from-purple-500 to-pink-500'
            };

            const icons = {
                success: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>',
                error: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>',
                info: '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>',
                instagram: '<path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" fill="currentColor">'
            };

            // Remove existing notifications
            const existingNotifications = document.querySelectorAll('.social-notification');
            existingNotifications.forEach(notification => notification.remove());

            // Create notification element
            const notification = document.createElement('div');
            notification.className =
                `social-notification fixed top-4 right-4 ${colors[type] || colors.success} text-white px-6 py-4 rounded-lg shadow-lg z-50 transform translate-x-full transition-all duration-300 max-w-sm`;

            notification.innerHTML = `
        <div class="flex items-start gap-3">
            <svg class="w-5 h-5 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                ${icons[type] || icons.success}
            </svg>
            <div class="flex-1">
                ${message}
            </div>
            <button class="flex-shrink-0 text-white hover:text-gray-200 transition-colors" onclick="this.closest('.social-notification').remove()">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
    `;

            document.body.appendChild(notification);

            // Animate notification
            setTimeout(() => {
                notification.classList.remove('translate-x-full');
                notification.classList.add('translate-x-0');
            }, 100);

            // Remove notification after delay
            setTimeout(() => {
                notification.classList.add('translate-x-full');
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.remove();
                    }
                }, 300);
            }, 5000);
        }

        // Simple notification function (backward compatibility)
        function showNotification(message) {
            showAdvancedNotification(message, 'success');
        }

        // Error notification
        function showErrorNotification(message) {
            showAdvancedNotification(message, 'error');
        }

        // Analytics tracking (optional - implement based on your analytics service)
        function trackSocialShare(platform) {
            // Google Analytics 4 example
            if (typeof gtag !== 'undefined') {
                gtag('event', 'share', {
                    method: platform,
                    content_type: 'article',
                    item_id: '{{ $post->slug }}',
                    content_title: pageTitle
                });
            }

            // Facebook Pixel example
            if (typeof fbq !== 'undefined') {
                fbq('track', 'Share', {
                    content_name: pageTitle,
                    content_type: 'article'
                });
            }

            // Console log for debugging
            console.log(`Shared to ${platform}: ${pageTitle}`);
        }

        // Add keyboard shortcuts
        document.addEventListener('keydown', function(e) {
            // Ctrl/Cmd + Shift + S for quick share menu
            if ((e.ctrlKey || e.metaKey) && e.shiftKey && e.key === 'S') {
                e.preventDefault();
                showShareMenu();
            }
        });

        // Quick share menu (bonus feature)
        function showShareMenu() {
            const shareMenu = document.createElement('div');
            shareMenu.className = 'fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center';
            shareMenu.innerHTML = `
        <div class="bg-gray-800 rounded-lg p-6 max-w-sm w-full mx-4">
            <h3 class="text-lg font-semibold text-white mb-4">Bagikan Artikel</h3>
            <div class="space-y-3">
                <button onclick="shareToFacebook(); this.closest('.fixed').remove();" class="w-full flex items-center gap-3 p-3 bg-blue-600 hover:bg-blue-700 rounded-lg text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                    Facebook
                </button>
                <button onclick="shareToLinkedIn(); this.closest('.fixed').remove();" class="w-full flex items-center gap-3 p-3 bg-blue-700 hover:bg-blue-800 rounded-lg text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                    </svg>
                    LinkedIn
                </button>
                <button onclick="shareToInstagram(); this.closest('.fixed').remove();" class="w-full flex items-center gap-3 p-3 bg-gradient-to-r from-purple-500 to-pink-500 hover:from-purple-600 hover:to-pink-600 rounded-lg text-white transition-colors">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                    </svg>
                    Instagram
                </button>
                <button onclick="copyToClipboard(); this.closest('.fixed').remove();" class="w-full flex items-center gap-3 p-3 bg-gray-700 hover:bg-gray-600 rounded-lg text-white transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                    Copy Link
                </button>
            </div>
            <button onclick="this.closest('.fixed').remove();" class="mt-4 w-full p-2 text-gray-400 hover:text-white transition-colors">
                Tutup
            </button>
        </div>
    `;

            document.body.appendChild(shareMenu);
        }
    </script>
@endsection
