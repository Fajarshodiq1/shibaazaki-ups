{{-- resources/views/components/card.blade.php --}}
@props([
    'title',
    'description' => null,
    'image' => null,
    'href' => null,
    'variant' => 'default',
    'size' => 'md',
    'imagePosition' => 'top', // top, left, right
    'showDescription' => true,
    'borderStyle' => 'gradient', // gradient, solid, none
    'additionalClasses' => '',
    'target' => '_self',
    'buttonText' => null,
    'buttonVariant' => 'primary', // primary, secondary, outline
    'buttonHref' => null,
    'clickableCard' => true,
    'enableMobileCarousel' => false, // New prop to enable carousel mode
    'carouselItems' => [], // Array of items for carousel
])

@php
    // Card variants untuk berbagai use case
    $variants = [
        'default' => [
            'container' => 'p-4 space-y-3',
            'image' => 'w-14 h-14',
            'title' => 'font-semibold text-base',
            'description' => 'text-sm text-gray-600 line-clamp-2',
        ],
        'category' => [
            'container' => 'p-[18px] space-y-3',
            'image' => 'w-[58px] h-[58px]',
            'title' => 'font-bold text-sm',
            'description' => 'text-xs text-belibang-grey line-clamp-2',
        ],
        'product' => [
            'container' => 'p-5 space-y-4',
            'image' => 'w-full h-48 object-cover rounded-lg',
            'title' => 'font-bold text-lg',
            'description' => 'text-sm text-gray-400 line-clamp-2',
        ],
        'service' => [
            'container' => 'p-6 space-y-4',
            'image' => 'w-16 h-16',
            'title' => 'font-bold text-xl',
            'description' => 'text-base text-gray-600 line-clamp-3',
        ],
        'compact' => [
            'container' => 'p-3 space-y-2',
            'image' => 'w-10 h-10',
            'title' => 'font-medium text-sm',
            'description' => 'text-xs text-gray-500 line-clamp-1',
        ],
        'feature' => [
            'container' => 'p-8 space-y-6 text-center',
            'image' => 'w-20 h-20 mx-auto',
            'title' => 'font-bold text-2xl',
            'description' => 'text-lg text-gray-600 line-clamp-4',
        ],
    ];

    // Size variations
    $sizes = [
        'sm' => 'max-w-xs',
        'md' => 'max-w-sm',
        'lg' => 'max-w-md',
        'xl' => 'max-w-lg',
        'full' => 'w-full',
    ];

    // Border styles
    $borderStyles = [
        'gradient' => 'p-[1px] bg-img-transparent hover:bg-img-purple-to-orange',
        'solid' => 'border-2 border-gray-200 hover:border-gray-300',
        'none' => 'shadow-lg hover:shadow-xl',
    ];

    // Button styles
    $buttonStyles = [
        'primary' =>
            'rounded-full bg-gradient-to-r from-blue-500 to-green-500 text-white hover:from-blue-600 hover:to-green-600 transition-all duration-300 flex items-center justify-center gap-2 font-medium shadow-lg hover:shadow-xl transform hover:-translate-y-0.5',
        'secondary' => 'bg-gray-600 hover:bg-gray-700 text-white',
        'outline' => 'border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white',
        'success' => 'bg-green-600 hover:bg-green-700 text-white',
        'danger' => 'bg-red-600 hover:bg-red-700 text-white',
    ];

    $currentButtonStyle = $buttonStyles[$buttonVariant] ?? $buttonStyles['primary'];
    $currentVariant = $variants[$variant] ?? $variants['default'];
    $currentSize = $sizes[$size] ?? $sizes['md'];
    $currentBorder = $borderStyles[$borderStyle] ?? $borderStyles['gradient'];

    // Determine if it's a link or div
$isLink = !empty($href) && $clickableCard && empty($buttonText);
$tag = $isLink ? 'a' : 'div';
@endphp

@if ($enableMobileCarousel && !empty($carouselItems))
    <!-- Mobile Carousel Mode -->
    <div x-data="{
        currentSlide: 0,
        slides: {{ json_encode($carouselItems) }},
        totalSlides: {{ count($carouselItems) }},
        autoPlay: true,
        autoPlayInterval: 4000,
        init() {
            if (this.autoPlay) {
                setInterval(() => {
                    this.nextSlide();
                }, this.autoPlayInterval);
            }
        },
        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.totalSlides;
        },
        prevSlide() {
            this.currentSlide = this.currentSlide === 0 ? this.totalSlides - 1 : this.currentSlide - 1;
        },
        goToSlide(index) {
            this.currentSlide = index;
        }
    }" class="relative w-full {{ $additionalClasses }}">

        <!-- Desktop: Show single card (hidden on mobile) -->
        <div class="hidden md:block">
            @include('components.single-card', [
                'title' => $title,
                'description' => $description,
                'image' => $image,
                'href' => $href,
                'variant' => $variant,
                'size' => $size,
                'imagePosition' => $imagePosition,
                'showDescription' => $showDescription,
                'borderStyle' => $borderStyle,
                'target' => $target,
                'buttonText' => $buttonText,
                'buttonVariant' => $buttonVariant,
                'buttonHref' => $buttonHref,
                'clickableCard' => $clickableCard,
                'currentVariant' => $currentVariant,
                'currentSize' => $currentSize,
                'currentBorder' => $currentBorder,
                'currentButtonStyle' => $currentButtonStyle,
                'isLink' => $isLink,
                'tag' => $tag,
            ])
        </div>

        <!-- Mobile: Carousel Mode -->
        <div class="block md:hidden">
            <!-- Carousel Container -->
            <div class="relative overflow-hidden rounded-2xl">
                <!-- Slides Container -->
                <div class="flex transition-transform duration-300 ease-in-out"
                    x-bind:style="`transform: translateX(-${currentSlide * 100}%)`">
                    <template x-for="(slide, index) in slides" :key="index">
                        <div class="w-full flex-shrink-0 px-2">
                            <div
                                :class="`group block w-full h-fit rounded-2xl transition-all duration-300 ${borderStyles['{{ $borderStyle }}'] || borderStyles['gradient']}`">
                                <div
                                    class="flex rounded-2xl w-full bg-belibang-darker-grey transition-all duration-300 
                                            {{ $variant === 'category' ? 'bg-img-black-gradient group-active:bg-img-black' : '' }}
                                            {{ $imagePosition === 'left' || $imagePosition === 'right' ? 'flex-row' : 'flex-col' }}
                                            {{ $imagePosition === 'right' ? 'flex-row-reverse' : '' }}
                                            {{ $currentVariant['container'] }}">

                                    <!-- Image -->
                                    <div x-show="slide.image"
                                        class="flex shrink-0 items-center justify-center
                                                {{ $imagePosition === 'left' || $imagePosition === 'right' ? 'mr-4' : '' }}
                                                {{ $currentVariant['image'] }}">
                                        <img :src="slide.image" :alt="slide.title"
                                            class="w-full h-full object-contain" />
                                    </div>

                                    <!-- Content -->
                                    <div
                                        class="flex flex-col text-left space-y-2 min-w-0 flex-1 {{ $variant === 'category' ? 'px-[6px]' : '' }}">
                                        <h3 class="{{ $currentVariant['title'] }}" x-text="slide.title"></h3>

                                        <div x-show="slide.description && {{ $showDescription ? 'true' : 'false' }}"
                                            class="prose {{ $currentVariant['description'] }}"
                                            x-html="slide.description"></div>

                                        <!-- Button -->
                                        <div x-show="slide.buttonText" class="mt-4">
                                            <a :href="slide.buttonHref || slide.href || '#'"
                                                target="{{ $target }}"
                                                class="inline-flex w-full justify-center items-center px-4 py-2 rounded-full font-medium text-sm transition-colors duration-200 {{ $currentButtonStyle }}"
                                                x-text="slide.buttonText">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Navigation Buttons -->
            <div class="flex justify-between items-center mt-4">
                <!-- Previous Button -->
                <button @click="prevSlide()"
                    class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>

                <!-- Dots Indicator -->
                <div class="flex space-x-2">
                    <template x-for="(slide, index) in slides" :key="index">
                        <button @click="goToSlide(index)" class="w-2 h-2 rounded-full transition-colors duration-200"
                            :class="currentSlide === index ? 'bg-blue-500' : 'bg-gray-300'">
                        </button>
                    </template>
                </div>

                <!-- Next Button -->
                <button @click="nextSlide()"
                    class="p-2 rounded-full bg-gray-200 hover:bg-gray-300 transition-colors duration-200">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>

            <!-- Touch Support for Swipe -->
            <div x-data="{
                startX: 0,
                currentX: 0,
                isDragging: false,
                handleTouchStart(e) {
                    this.startX = e.touches[0].clientX;
                    this.isDragging = true;
                },
                handleTouchMove(e) {
                    if (!this.isDragging) return;
                    this.currentX = e.touches[0].clientX;
                },
                handleTouchEnd() {
                    if (!this.isDragging) return;
                    const diff = this.startX - this.currentX;
                    const threshold = 50;
            
                    if (Math.abs(diff) > threshold) {
                        if (diff > 0) {
                            $dispatch('next-slide');
                        } else {
                            $dispatch('prev-slide');
                        }
                    }
            
                    this.isDragging = false;
                }
            }" @touchstart="handleTouchStart" @touchmove="handleTouchMove"
                @touchend="handleTouchEnd" @next-slide="nextSlide()" @prev-slide="prevSlide()"
                class="absolute inset-0 pointer-events-none">
            </div>
        </div>
    </div>
@else
    <!-- Single Card Mode (Original) -->
    <{{ $tag }}
        @if ($isLink) href="{{ $href }}" target="{{ $target }}" @endif
        class="group block w-fit h-fit rounded-2xl transition-all duration-300 {{ $currentBorder }} {{ $currentSize }} {{ $additionalClasses }}"
        {{ $attributes }}>

        <div
            class="flex rounded-2xl w-full bg-belibang-darker-grey transition-all duration-300 
                    @if ($variant === 'category') bg-img-black-gradient group-active:bg-img-black @endif
                    {{ $imagePosition === 'left' || $imagePosition === 'right' ? 'flex-row' : 'flex-col' }}
                    {{ $imagePosition === 'right' ? 'flex-row-reverse' : '' }}
                    {{ $currentVariant['container'] }}">

            @if ($image)
                <!-- Image Container -->
                <div
                    class="flex shrink-0 items-center justify-center
                        @if ($imagePosition === 'left' || $imagePosition === 'right') mr-4 @endif
                        {{ $currentVariant['image'] }}">
                    <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full object-contain" />
                </div>
            @endif

            <!-- Content Container -->
            <div
                class="flex flex-col text-left space-y-2 min-w-0 flex-1
                        @if ($variant === 'category') px-[6px] @endif">
                <h3 class="{{ $currentVariant['title'] }}">{{ $title }}</h3>

                @if ($showDescription && $description)
                    <div class="prose {{ $currentVariant['description'] }}">{!! $description !!}</div>
                @endif

                @if (isset($slot) && $slot->isNotEmpty())
                    <div class="mt-2">
                        {{ $slot }}
                    </div>
                @endif

                @if ($buttonText)
                    <div class="mt-4">
                        <a href="{{ $buttonHref ?? ($href ?? '#') }}" target="{{ $target }}"
                            class="inline-flex w-full justify-center items-center px-4 py-2 rounded-full font-medium text-sm transition-colors duration-200 {{ $currentButtonStyle }}">
                            {{ $buttonText }}
                        </a>
                    </div>
                @endif
            </div>
        </div>
        </{{ $tag }}>
@endif
