<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Edit Produk" subtitle="Perbarui informasi produk Anda" button-route="products.index"
            button-text="Kembali" />
    </x-slot>

    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-edit text-indigo-500"></i>
                    Edit Informasi Produk
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Perbarui detail produk "{{ $product->name }}" di bawah ini.
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('products.update', $product) }}" enctype="multipart/form-data"
                    class="space-y-8" id="productsForm">
                    @csrf
                    @method('PUT')

                    <!-- Product Name Section -->
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-box text-indigo-500"></i>
                            <x-input-label for="name" :value="__('Nama Produk')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="name" :value="old('name', $product->name)" required autofocus
                            placeholder="Masukkan nama produk" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <i class="fas fa-lightbulb"></i>
                            <span>
                                Berikan nama yang jelas dan deskriptif untuk produk Anda
                            </span>
                        </div>
                    </section>

                    <!-- Product Details Section -->
                    <section class="flex w-full gap-6">
                        <div class="space-y-2 w-full">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-trademark text-indigo-500"></i>
                                <x-input-label for="brand" :value="__('Merek')" class="text-base font-medium" />
                            </div>
                            <x-text-input id="brand" name="brand" :value="old('brand', $product->brand)"
                                placeholder="Masukkan merek produk" class="block w-full" />
                            <x-input-error :messages="$errors->get('brand')" class="mt-2" />
                        </div>
                        <div class="space-y-2 w-full">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-weight text-indigo-500"></i>
                                <x-input-label for="capacity" :value="__('Kapasitas/Ukuran')" class="text-base font-medium" />
                            </div>
                            <x-text-input id="capacity" name="capacity" :value="old('capacity', $product->capacity)"
                                placeholder="Contoh: 500ml, 1kg, XL" class="block w-full" />
                            <x-input-error :messages="$errors->get('capacity')" class="mt-2" />
                        </div>
                    </section>

                    {{-- Description --}}
                    <x-ckeditor id="description" name="description" :value="old('description', $product->description)" />

                    {{-- Price & Stock --}}
                    <section class="flex w-full gap-6">
                        <div class="space-y-2 w-full">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-file-upload text-indigo-500"></i>
                                <x-input-label for="file_upload" :value="__('File Produk')" class="text-base font-medium" />
                            </div>
                            <x-text-input id="file_upload" name="file_upload" type="file"
                                class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200" />
                            <x-input-error :messages="$errors->get('file_upload')" class="mt-2" />
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <i class="fas fa-info-circle"></i>
                                <span>Unggah file baru untuk mengganti file saat ini. Biarkan kosong jika tidak ingin
                                    mengubahnya.</span>
                            </div>
                        </div>
                    </section>

                    {{-- Current Image Display --}}
                    @if ($product->image)
                        <section class="space-y-2">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-image text-indigo-500"></i>
                                <x-input-label :value="__('Gambar Saat Ini')" class="text-base font-medium" />
                            </div>
                            <div class="flex items-start space-x-4 p-4 bg-gray-50 rounded-lg">
                                <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}"
                                    class="w-24 h-24 object-cover rounded-lg border border-gray-200">
                                <div class="flex-1">
                                    <p class="text-sm text-gray-600">
                                        Gambar produk saat ini. Unggah gambar baru di bawah untuk menggantinya.
                                    </p>
                                </div>
                            </div>
                        </section>
                    @endif

                    {{-- Image --}}
                    <section class="space-y-2">
                        <x-image-upload id="image" name="image" label="Gambar Produk Baru" :optional="true"
                            recommended="800x600px untuk hasil terbaik" />
                        @if ($product->image)
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <i class="fas fa-info-circle"></i>
                                <span>Kosongkan jika tidak ingin mengubah gambar</span>
                            </div>
                        @endif
                    </section>

                    {{-- Category --}}
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tags text-indigo-500"></i>
                            <x-input-label for="category_id" :value="__('Kategori Produk')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-select name="category_id" :options="$categories->pluck('name', 'id')"
                            selected="{{ old('category_id', $product->category_id) }}" required
                            placeholder="Pilih kategori produk" />
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <i class="fas fa-info-circle"></i>
                            <span>Pilih kategori yang sesuai untuk memudahkan pelanggan menemukan produk</span>
                        </div>
                    </section>

                    {{-- Buttons --}}
                    <section
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('products.index') }}">
                            Kembali
                        </x-secondary-button>
                        <x-primary-button>
                            Update Produk
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>
    </section>
</x-app-layout>
