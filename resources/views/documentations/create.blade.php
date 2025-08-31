<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Buat Dokumentasi" subtitle="Tambahkan dokumentasi baru ke koleksi Anda"
            button-route="documentations.index" button-text="Kembali" />
    </x-slot>
    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-info-circle text-indigo-500"></i>
                    Informasi Dokumentasi
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Silakan isi detail di bawah ini untuk membuat dokumentasi baru Anda.
                </p>
            </div>
            <div class="p-8">
                <form method="POST" action="{{ route('documentations.store') }}" enctype="multipart/form-data"
                    class="space-y-8" id="documentationsForm">
                    @csrf
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="title" :value="__('Judul Dokumentasi')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="title"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="title" :value="old('title')" required autofocus
                            placeholder="Masukkan judul dokumentasi" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </section>
                    <x-ckeditor name="content" label="Content" :limit="5000" />
                    <section class="space-y-2">
                        <x-image-upload id="image" name="image" label="Gambar"
                            recommended="400x300px untuk hasil terbaik" />
                    </section>
                    <section
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('documentations.index') }}">
                            Kembali
                        </x-secondary-button>
                        <x-primary-button>
                            Simpan
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>
    </section>
</x-app-layout>
