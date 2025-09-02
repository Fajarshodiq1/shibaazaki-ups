@extends('layouts.template')
{{-- seo --}}
@section('title', $category->name)
@section('description', $category->description)
@section('keywords', $category->name . ', ' . $category->description)

@section('content')
    <header class="w-full pt-16 md:pt-[74px] h-[30vh] bg-cover bg-no-repeat bg-center relative z-0"
        style="background-image: url('https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <!-- Overlay Gradient -->
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
    </header>
    <x-breadcrumb :items="[
        ['label' => 'Home', 'url' => '/'],
        ['label' => 'Layanan', 'url' => route('front.category.index')],
        ['label' => $category->name],
    ]" />
    <!-- Header Section -->
    <section class="container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-12">
        <!-- Category Header -->
        <div class="mb-12">
            <div class="flex flex-col lg:flex-row items-start lg:items-center gap-6 lg:gap-8">
                <!-- Category Icon -->
                <div class="flex-shrink-0">
                    <div
                        class="w-32 h-32 lg:w-52 lg:h-52 flex items-center justify-center p-3 rounded-full bg-white shadow-sm border border-gray-100">
                        <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }} Icon"
                            class="max-w-full max-h-full object-contain">
                    </div>
                </div>

                <!-- Category Content -->
                <div class="flex-1 min-w-0">
                    <h1
                        class="font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl text-gray-200 mb-3 lg:mb-4 leading-tight">
                        {{ $category->name }}
                    </h1>
                    <div class="prose prose-lg max-w-none text-belibang-grey leading-relaxed">
                        {!! $category->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Products Grid -->
    <section class="container max-w-7xl mx-auto px-5">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="products-grid">
            @forelse ($products as $item)
                <!-- Product Card  -->
                <x-product-card :product="$item" :show-rating="true" :show-badge="true" :show-button="true"
                    button-text="Beli Sekarang" class="hover:scale-105 transform transition-transform" />
            @empty
                <div class="col-span-1">
                    <x-empty-state title="Tidak ada data produk" message="Data akan segera tersedia disini." />
                </div>
            @endforelse
        </div>

        <!-- Load More Button -->
        <div class="text-center mt-12">
            {{-- paginate --}}
            {{ $products->links() }}
        </div>
    </section>

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');
        const sortSelect = document.getElementById('sort');

        // Filter by brand
        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.dataset.filter;

                productCards.forEach(card => {
                    if (filter === 'all' || card.dataset.brand === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Sort functionality
        sortSelect.addEventListener('change', () => {
            const sortValue = sortSelect.value;
            const productsGrid = document.getElementById('products-grid');
            const cards = Array.from(productCards);

            cards.sort((a, b) => {
                switch (sortValue) {
                    case 'name':
                        const nameA = a.querySelector('h3').textContent;
                        const nameB = b.querySelector('h3').textContent;
                        return nameA.localeCompare(nameB);
                    case 'price-low':
                        const priceA = parseInt(a.dataset.price);
                        const priceB = parseInt(b.dataset.price);
                        return priceA - priceB;
                    case 'price-high':
                        const priceA2 = parseInt(a.dataset.price);
                        const priceB2 = parseInt(b.dataset.price);
                        return priceB2 - priceA2;
                    case 'capacity':
                        const capA = parseInt(a.dataset.capacity);
                        const capB = parseInt(b.dataset.capacity);
                        return capA - capB;
                    default:
                        return 0;
                }
            });

            // Clear and re-append sorted cards
            productsGrid.innerHTML = '';
            cards.forEach(card => productsGrid.appendChild(card));
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>
@endsection
