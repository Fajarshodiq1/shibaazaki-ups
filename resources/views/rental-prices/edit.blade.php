<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Edit Harga Rental" subtitle="Perbarui harga rental untuk produk Anda"
            button-route="rental-prices.index" button-text="Kembali" />
    </x-slot>

    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-edit text-indigo-500"></i>
                    Edit Informasi Harga Rental
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Silakan perbarui detail di bawah ini untuk mengubah harga rental.
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('rental-prices.update', $rentalPrice->id) }}" class="space-y-8"
                    id="rentalPriceForm">
                    @csrf
                    @method('PUT')

                    <!-- Product Selection Section -->
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-box text-indigo-500"></i>
                            <x-input-label for="product_id" :value="__('Pilih Produk')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-select name="product_id" :options="$products->pluck('name', 'id')->toArray()"
                            selected="{{ old('product_id', $rentalPrice->product_id) }}"
                            placeholder="-- Pilih Produk --"
                            class="block w-full py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200" />
                        <x-input-error :messages="$errors->get('product_id')" class="mt-2" />
                    </section>

                    <!-- Duration and Price Section -->
                    <section class="flex w-full gap-6">
                        <div class="space-y-2 w-full">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-clock text-indigo-500"></i>
                                <x-input-label for="duration" :value="__('Durasi Rental')" class="text-base font-medium" />
                                <span class="text-red-500">*</span>
                            </div>
                            <x-select name="duration" :options="[
                                'daily' => 'Harian',
                                'weekly' => 'Mingguan',
                                'monthly' => 'Bulanan',
                                'yearly' => 'Tahunan',
                            ]"
                                selected="{{ old('duration', $rentalPrice->duration) }}"
                                placeholder="-- Pilih Durasi --"
                                class="block w-full py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200" />
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>

                        <div class="space-y-2 w-full">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-money-bill-wave text-indigo-500"></i>
                                <x-input-label for="price" :value="__('Harga (Rp)')" class="text-base font-medium" />
                                <span class="text-red-500">*</span>
                            </div>
                            <div class="relative">
                                <span
                                    class="absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-500 font-medium">Rp</span>
                                <x-text-input id="price"
                                    class="block w-full text-lg py-3 pl-12 pr-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                                    type="number" name="price" :value="old('price', $rentalPrice->price)" required placeholder="0"
                                    step="0.01" min="0" />
                            </div>
                            <x-input-error :messages="$errors->get('price')" class="mt-2" />
                        </div>
                    </section>

                    {{-- Buttons --}}
                    <section
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('rental-prices.index') }}">
                            <i class="fas fa-arrow-left mr-2"></i>
                            Batal
                        </x-secondary-button>
                        <x-primary-button>
                            <i class="fas fa-save mr-2"></i>
                            Update
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>

        <!-- Preview Card -->
        <aside class="mt-8 bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-green-50 to-emerald-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-eye text-green-500"></i>
                    Preview Harga
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Pratinjau bagaimana harga akan ditampilkan kepada customer
                </p>
            </div>
            <div class="p-8">
                <div id="pricePreview" class="text-center py-8 border-2 border-dashed border-gray-300 rounded-lg">
                    <i class="fas fa-search text-gray-400 text-3xl mb-4"></i>
                    <p class="text-gray-500">Pilih produk dan masukkan harga untuk melihat preview</p>
                </div>
            </div>
        </aside>
    </section>

    @push('scripts')
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const productSelect = document.querySelector('select[name="product_id"]');
                const durationSelect = document.querySelector('select[name="duration"]');
                const priceInput = document.querySelector('input[name="price"]');
                const previewDiv = document.getElementById('pricePreview');

                function updatePreview() {
                    const productText = productSelect.options[productSelect.selectedIndex]?.text;
                    const durationText = durationSelect.options[durationSelect.selectedIndex]?.text;
                    const price = priceInput.value;

                    if (productText && productText !== '-- Pilih Produk --' &&
                        durationText && durationText !== '-- Pilih Durasi --' && price) {

                        const formattedPrice = new Intl.NumberFormat('id-ID', {
                            style: 'currency',
                            currency: 'IDR'
                        }).format(price);

                        previewDiv.innerHTML = `
                        <div class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white rounded-lg p-6">
                            <h4 class="text-lg font-semibold mb-2">${productText}</h4>
                            <div class="flex items-center justify-center space-x-2">
                                <span class="text-2xl font-bold">${formattedPrice}</span>
                                <span class="text-indigo-200">/ ${durationText.toLowerCase()}</span>
                            </div>
                        </div>
                    `;
                    } else {
                        previewDiv.innerHTML = `
                        <i class="fas fa-search text-gray-400 text-3xl mb-4"></i>
                        <p class="text-gray-500">Pilih produk dan masukkan harga untuk melihat preview</p>
                    `;
                    }
                }

                // Set initial preview when page loads
                updatePreview();

                productSelect.addEventListener('change', updatePreview);
                durationSelect.addEventListener('change', updatePreview);
                priceInput.addEventListener('input', updatePreview);
            });
        </script>
    @endpush
</x-app-layout>
