@extends('layouts.template')
@section('content')
    <header class="w-full pt-16 md:pt-[74px] h-[30vh] bg-cover bg-no-repeat bg-center relative z-0"
        style="background-image: url('https://images.pexels.com/photos/8071904/pexels-photo-8071904.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <!-- Overlay Gradient -->
        <div class="w-full h-full absolute top-0 bg-gradient-to-b from-belibang-black/70 to-belibang-black z-0"></div>
    </header>
    <x-breadcrumb :items="[['label' => 'Beranda', 'url' => route('front.home.index')], ['label' => 'Layanan']]" />

    <section id="Category" class="container max-w-7xl mx-auto mb-[102px] flex flex-col gap-8 mt-3 px-5">
        <x-heading1>Layanan Terbaik Kami</x-heading1>
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
            @forelse ($categories as $itemCategory)
                <x-card :title="$itemCategory->name" :description="$itemCategory->description" :image="Storage::url($itemCategory->image)" :href="route('front.category.show', $itemCategory->slug)" variant="category"
                    class="category-card-responsive" />
            @empty
                <div class="col-span-full">
                    <x-empty-state title="Tidak ada kategori lainnya" message="Kategori terkait akan muncul di sini." />
                </div>
            @endforelse
        </div>
    </section>

    <!-- Products Section with AJAX Filter -->
    <section class="container max-w-7xl mx-auto px-5">
        <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-8">
            <h2 class="text-2xl font-bold text-gray-200">Produk Kami</h2>

            <!-- Category Filter -->
            <div class="w-full sm:w-auto relative">
                <select id="categoryFilter"
                    class="w-full sm:w-64 px-4 py-2 border border-belibang-dark-grey rounded-lg bg-belibang-darker-grey appearance-none">
                    <option value="all">Semua Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Filter Stats -->
        <div class="mb-6 flex items-center gap-4">
            <span id="productCount" class="text-sm text-gray-500">
                Menampilkan {{ $products->count() }} dari {{ $products->total() }} produk
            </span>
            <div id="activeFilter" class="hidden">
                <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                    <span id="filterText"></span>
                    <button onclick="clearFilter()" class="ml-2 text-blue-600 hover:text-blue-800">
                        <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </span>
            </div>
        </div>

        <!-- Loading Indicator -->
        <div id="loading" class="hidden text-center py-8">
            <div class="inline-flex items-center">
                <div class="animate-spin rounded-full h-6 w-6 border-b-2 border-blue-600"></div>
                <span class="ml-2 text-gray-600">Memuat produk...</span>
            </div>
        </div>

        <!-- Products Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6" id="products-grid">
            @forelse ($products as $item)
                <x-product-card :product="$item" :show-rating="true" :show-badge="true" :show-button="true"
                    button-text="Beli Sekarang" class="hover:scale-105 transform transition-transform" />
            @empty
                <div class="col-span-full">
                    <x-empty-state title="Tidak ada data produk" message="Data akan segera tersedia disini." />
                </div>
            @endforelse
        </div>

        <!-- Pagination -->
        <div id="pagination-container" class="text-center mt-12">
            @if ($products->hasPages())
                {{ $products->links() }}
            @endif
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const categoryFilter = document.getElementById('categoryFilter');
            const productsGrid = document.getElementById('products-grid');
            const loading = document.getElementById('loading');
            const productCount = document.getElementById('productCount');
            const activeFilter = document.getElementById('activeFilter');
            const filterText = document.getElementById('filterText');
            const paginationContainer = document.getElementById('pagination-container');

            categoryFilter.addEventListener('change', function() {
                const selectedCategory = this.value;
                filterProducts(selectedCategory);
                updateFilterDisplay(selectedCategory);
            });

            function filterProducts(category) {
                // Show loading
                loading.classList.remove('hidden');
                productsGrid.style.opacity = '0.5';

                // Make AJAX request
                fetch(`{{ route('front.category.filter') }}?category=${category}`, {
                        method: 'GET',
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                            'Accept': 'application/json',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        // Update products grid
                        productsGrid.innerHTML = data.html || getEmptyState(category);

                        // Update pagination
                        paginationContainer.innerHTML = data.pagination || '';

                        // Update product count
                        productCount.textContent = `Menampilkan ${data.total || 0} produk`;

                        // Hide loading
                        loading.classList.add('hidden');
                        productsGrid.style.opacity = '1';

                        // Add animation to new products
                        animateProductCards();
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        loading.classList.add('hidden');
                        productsGrid.style.opacity = '1';
                    });
            }

            function updateFilterDisplay(category) {
                if (category === 'all') {
                    activeFilter.classList.add('hidden');
                } else {
                    const categoryName = categoryFilter.options[categoryFilter.selectedIndex].text;
                    filterText.textContent = `Kategori: ${categoryName}`;
                    activeFilter.classList.remove('hidden');
                }
            }

            function getEmptyState(category) {
                const message = category !== 'all' ?
                    'Tidak ada produk untuk kategori ini.' :
                    'Data akan segera tersedia disini.';

                return `
                    <div class="col-span-full">
                        <div class="text-center py-12">
                            <div class="mx-auto h-12 w-12 text-gray-400">
                                <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2M4 13h2m13-8-7 7-7-7"></path>
                                </svg>
                            </div>
                            <h3 class="mt-2 text-sm font-medium text-gray-900">Tidak ada data produk</h3>
                            <p class="mt-1 text-sm text-gray-500">${message}</p>
                        </div>
                    </div>
                `;
            }

            function animateProductCards() {
                const cards = productsGrid.querySelectorAll('.hover\\:scale-105');
                cards.forEach((card, index) => {
                    card.style.opacity = '0';
                    card.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        card.style.transition = 'all 0.3s ease';
                        card.style.opacity = '1';
                        card.style.transform = 'translateY(0)';
                    }, index * 50);
                });
            }

            // Clear filter function
            window.clearFilter = function() {
                categoryFilter.value = 'all';
                filterProducts('all');
                updateFilterDisplay('all');
            }
        });
    </script>
@endsection
