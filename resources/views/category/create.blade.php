<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Tambah Layanan" subtitle="Tambah layanan baru untuk mengatur konten Anda dengan lebih baik"
            button-route="categories.index" button-text="Kembali" />
    </x-slot>

    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-info-circle text-indigo-500"></i>
                    Informasi Layanan
                </h3>
                <p class="text-gray-600 text-xs md:text-sm mt-1">
                    Silakan isi detail di bawah ini untuk membuat layanan baru Anda.
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('categories.store') }}" enctype="multipart/form-data"
                    class="space-y-8" id="categoryForm">
                    @csrf

                    <!-- Category Name Section -->
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="name" :value="__('Nama Layanan')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="name" :value="old('name')" required autofocus
                            placeholder="e.g., Technology, Fashion, Food & Drinks" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <i class="fas fa-lightbulb"></i>
                            <span>URL slug will be automatically generated from the name (e.g., "technology",
                                "fashion")</span>
                        </div>
                    </div>

                    <!-- Category Image Section -->
                    <div class="space-y-2">
                        <x-image-upload id="category_image" name="image" label="Gambar/Icon Layanan" :optional="false"
                            recommended="400 x 300 px untuk hasil terbaik" />
                    </div>

                    <!-- Description Section -->
                    <x-ckeditor name="description" label="Deskripsi" :optional="true"
                        placeholder="Deskripsikan layanan anda..." :value="$category->description ?? ''" />
                    <!-- Status Section -->
                    <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-toggle-on text-green-500 text-xl"></i>
                                <div>
                                    <h4 class="font-medium text-gray-800">Status</h4>
                                    <p class="text-sm text-gray-600">Pilih apakah layanan ini harus aktif
                                        segera</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="text-sm text-gray-600" id="statusText">Aktif</span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input id="is_active" name="is_active" type="checkbox" value="1"
                                        {{ old('is_active', true) ? 'checked' : '' }} class="sr-only peer"
                                        onchange="updateStatusText(this)">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                    <!-- Action Buttons -->
                    <div
                        class="flex flex-col sm:flex-row w-full items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('categories.index') }}">
                            Kembali
                        </x-secondary-button>
                        <x-primary-button>
                            Simpan
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
