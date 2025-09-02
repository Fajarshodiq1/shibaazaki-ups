@extends('layouts.template')
@section('title', 'UPS Brands - Shibaazaki')
@section('meta_title', 'UPS Brands - Shibaazaki')
@section('meta_description',
    'Kami menyediakan berbagai brand UPS berkualitas untuk memenuhi kebutuhan daya tak terputus
    Anda.')
@section('meta_keywords', 'ups, brand ups, shibaazaki, jual ups, sewa ups, rental ups, maintenance ups')
@section('content')
    <x-hero-header title="Brand UPS Kami" subtitle="Kami menyediakan berbagai brand UPS berkualitas" />
    <x-breadcrumb :items="[['label' => 'Beranda', 'url' => route('front.home.index')], ['label' => 'Brand UPS']]" />
    <x-search-bar :action="route('front.ups-brands.index')" placeholder="Cari Brand UPS..." :collection="$upsBrands" label="brand" />
    <section id="NewProduct"
        class="container max-w-7xl mx-auto mb-16 md:mb-24 lg:mb-[102px] flex flex-col gap-6 md:gap-8 px-5">
        <!-- Responsive Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 sm:gap-5 md:gap-6 lg:gap-[22px]">
            @forelse ($upsBrands as $item)
                <!-- Product Card -->
                <div class="product-card flex flex-col rounded-xl md:rounded-[18px] bg-[#181818] overflow-hidden">
                    <a href="{{ route('front.ups-brands.show', $item->slug) }}"
                        class="thumbnail w-full h-[160px] sm:h-[170px] md:h-[180px] lg:h-[180px] flex shrink-0 overflow-hidden relative">
                        <img src="{{ Storage::url($item->image) }}" class="w-full h-full object-cover"
                            alt="{{ $item->name }}" />
                    </a>
                    <div class="p-3 sm:p-4 md:p-[10px_14px_12px] h-full flex flex-col justify-between gap-3 md:gap-[14px]">
                        <div class="flex flex-col gap-1">
                            <a href="{{ route('front.ups-brands.show', $item->slug) }}"
                                class="font-bold text-base sm:text-lg md:text-xl lg:text-2xl mb-2 leading-snug line-clamp-2">
                                {{ $item->name }}
                            </a>
                        </div>
                    </div>
                </div>

            @empty
                <x-empty-state title="Brand UPS tidak ditemukan" message="Coba lagi dengan kata kunci lain." />
            @endforelse
        </div>
        <!-- Load More Button -->
        <div class="text-center mt-12">
            {{-- pagination --}}
            {{ $upsBrands->links() }}
        </div>
    </section>
@endsection
