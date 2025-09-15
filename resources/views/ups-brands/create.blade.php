<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Buat Brand UPS Baru" subtitle="Tambahkan brand UPS baru ke koleksi Anda"
            button-route="ups-brands.index" button-text="Kembali" />
    </x-slot>
    <!-- Main Form Card -->
    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-info-circle text-indigo-500"></i>
                    Informasi Brand UPS
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Silakan isi detail di bawah ini untuk membuat brand UPS baru Anda.
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('ups-brands.store') }}" enctype="multipart/form-data"
                    class="space-y-8" id="postsForm">
                    @csrf
                    <!-- ups name Section -->
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="name" :value="__('Nama Brand UPS')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="name" :value="old('name')" required autofocus
                            placeholder="Masukkan nama brand UPS" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <i class="fas fa-lightbulb"></i>
                            <span>
                                Slug URL akan dibuat otomatis dari nama brand UPS (contoh: "postingan-pertama-saya",
                                "menjelajahi-ups")
                            </span>
                        </div>
                    </section>
                    <x-ckeditor name="description" label="Content" :limit="5000" />
                    <section class="space-y-2">
                        <x-image-upload id="image" name="image" label="Masukan Gambar" :required="true"
                            recommended="400x300px untuk hasil terbaik" />
                    </section>
                    <section class="flex w-full gap-6">
                        <div class="space-y-2 w-full">
                            <div class="flex items-center space-x-2">
                                <i class="fas fa-file-upload text-indigo-500"></i>
                                <x-input-label for="file_upload" :value="__('Upload File (Opsional)')" class="text-base font-medium" />
                            </div>
                            <input type="file" id="file_upload" name="file_upload"
                                class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4
                                       file:rounded-lg file:border-0
                                       file:text-sm file:font-semibold
                                       file:bg-indigo-50 file:text-indigo-700
                                       hover:file:bg-indigo-100
                                       border border-gray-200 rounded-lg
                                       focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200
                                       transition-all duration-200" />
                            <x-input-error :messages="$errors->get('file_upload')" class="mt-2" />
                            <div class="flex items-center space-x-2 text-sm text-gray-500">
                                <i class="fas fa-info-circle"></i>
                                <span>Format yang didukung: pdf, doc, docx, xls, xlsx, ppt, pptx, txt (maks 5MB)</span>
                            </div>
                    </section>
                    <section
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('ups-brands.index') }}">
                            Back
                        </x-secondary-button>
                        <x-primary-button>
                            Save Brand
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>
    </section>
</x-app-layout>
