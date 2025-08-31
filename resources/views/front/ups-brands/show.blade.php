@extends('layouts.template')
@section('title', 'UPS Brands - Shibaazaki')
@section('meta_title', 'UPS Brands - ' . $upsBrand->name)
@section('meta_description', 'Detail tentang brand UPS ' . $upsBrand->name)
@section('meta_keywords', 'ups, brand ups, ' . $upsBrand->name . ', ' . $upsBrand->name . ' ups')
@section('content')
    <x-hero-header title="Brand UPS Kami" subtitle="Kami menyediakan berbagai brand UPS berkualitas" />
    <section class="container max-w-[1230px] mx-auto px-5 my-5">
        <x-breadcrumb :items="[
            ['label' => 'Home', 'url' => '/'],
            ['label' => 'UPS Brands', 'url' => route('front.ups-brands.index')],
            ['label' => $upsBrand->name],
        ]" />
    </section>
    <!-- Product Detail -->
    <section class="container max-w-[1230px] mx-auto mb-16 px-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image -->
            <div class="lg:sticky lg:top-24 h-fit self-start">
                <div class="aspect-square bg-[#181818] rounded-2xl overflow-hidden border border-gray-800">
                    <img src="{{ $upsBrand->image ? asset('storage/' . $upsBrand->image) : 'https://via.placeholder.com/600x600?text=UPS' }}"
                        class="w-full h-full object-cover" alt="{{ $upsBrand->name }}">
                </div>
            </div>
            <!-- Product Info -->
            <div class="space-y-6">
                <!-- Title & Brand -->
                <div>
                    <h1 class="text-3xl md:text-4xl font-bold text-white mb-2">{{ $upsBrand->name }}</h1>
                </div>

                <!-- Description -->
                @if ($upsBrand->description)
                    <div class="bg-[#181818] rounded-2xl p-6 border border-gray-800">
                        <h3 class="text-xl font-semibold text-white mb-4">Deskripsi</h3>
                        <div class="text-gray-300 leading-relaxed prose prose-invert">{!! $upsBrand->description !!}</div>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection
