<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Tambah Partner" subtitle="Tambah partner baru untuk mengatur konten Anda dengan lebih baik"
            button-route="partners.index" button-text="Kembali" />
    </x-slot>
    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-info-circle text-indigo-500"></i>
                    Informasi Partner
                </h3>
                <p class="text-gray-600 text-xs md:text-sm mt-1">
                    Silakan isi detail di bawah ini untuk membuat partner baru Anda.
                </p>
            </div>
            <div class="p-8">
                <form method="POST" action="{{ route('partners.store') }}" enctype="multipart/form-data"
                    class="space-y-8" id="partnerForm">
                    @csrf
                    <!-- Partner Name Section -->
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="name" :value="__('Nama Partner')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="name" :value="old('name')" required autofocus
                            placeholder="e.g., Partner Name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>
                    <!-- Partner Description Section -->
                    <x-ckeditor name="description" label="Deskripsi" :optional="false"
                        placeholder="Deskripsikan layanan anda..." />
                    <div class="space-y-2">
                        <x-image-upload id="logo" name="logo" label="Logo/Icon Partner" :optional="false"
                            recommended="400 x 300 px untuk hasil terbaik" />
                    </div>
                    <div
                        class="flex flex-col sm:flex-row w-full items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('partners.index') }}">
                            Kembali
                        </x-secondary-button>
                        <x-primary-button>
                            Simpan
                        </x-primary-button>
                    </div>
                </form>
            </div>
    </section>
</x-app-layout>
