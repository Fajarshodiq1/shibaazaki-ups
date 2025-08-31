<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Edit Dokumentasi" subtitle="Perbarui dokumentasi Anda" button-route="documentations.index"
            button-text="Kembali" />
    </x-slot>

    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <!-- Header -->
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-yellow-50 to-orange-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-edit text-yellow-500"></i>
                    Edit Dokumentasi
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Perbarui informasi di bawah ini untuk memperbaharui dokumentasi Anda.
                </p>
            </div>

            <!-- Form -->
            <div class="p-8">
                <form method="POST" action="{{ route('documentations.update', $documentation->id) }}"
                    enctype="multipart/form-data" class="space-y-8">
                    @csrf
                    @method('PUT')

                    <!-- Judul -->
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-yellow-500"></i>
                            <x-input-label for="title" :value="__('Judul Dokumentasi')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="title"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-yellow-500 focus:ring-2 focus:ring-yellow-200 transition-all duration-200"
                            type="text" name="title" :value="old('title', $documentation->title)" required autofocus
                            placeholder="Masukkan judul dokumentasi" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </section>

                    <!-- Content -->
                    <x-ckeditor name="content" label="Content" :limit="5000" :value="old('content', $documentation->content)" />

                    <!-- Gambar -->
                    <section class="space-y-2">
                        <x-input-label for="image" :value="__('Gambar')" class="text-base font-medium" />
                        <div class="flex items-center space-x-6">
                            <!-- Preview Gambar Lama -->
                            @if ($documentation->image)
                                <div class="flex-shrink-0">
                                    <img src="{{ Storage::url($documentation->image) }}"
                                        alt="{{ $documentation->title }}"
                                        class="w-32 h-32 object-cover rounded-lg border">
                                </div>
                            @endif
                            <!-- Upload Baru -->
                            <x-image-upload id="image" name="image" label="Ganti Gambar"
                                recommended="400x300px untuk hasil terbaik" />
                        </div>
                        <x-input-error :messages="$errors->get('image')" class="mt-2" />
                    </section>

                    <!-- Buttons -->
                    <section
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('documentations.index') }}">
                            Batal
                        </x-secondary-button>
                        <x-primary-button>
                            Update
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>
    </section>
</x-app-layout>
