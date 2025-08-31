<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Edit Brand UPS" subtitle="Perbarui informasi brand UPS Anda" button-route="ups-brands.index"
            button-text="Kembali" />
    </x-slot>

    <!-- Main Form Card -->
    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-edit text-indigo-500"></i>
                    Edit Informasi Brand UPS
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Silakan perbarui detail di bawah ini untuk brand UPS Anda.
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('ups-brands.update', $upsBrand) }}" enctype="multipart/form-data"
                    class="space-y-8" id="postsForm">
                    @csrf
                    @method('PUT')

                    <!-- UPS Name -->
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="name" :value="__('Nama Brand UPS')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg 
                            focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="name" :value="old('name', $upsBrand->name)" required autofocus
                            placeholder="Masukkan nama brand UPS" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </section>

                    <!-- Description -->
                    <x-ckeditor name="description" label="Content" :limit="5000" :value="old('description', $upsBrand->description)" />

                    <!-- Image Upload -->
                    <section class="space-y-2">
                        <x-image-upload id="image" name="image" label="Ganti Gambar (opsional)" :required="false"
                            recommended="400x300px untuk hasil terbaik" />

                        @if ($upsBrand->image)
                            <div class="mt-2">
                                <p class="text-sm text-gray-600">Gambar saat ini:</p>
                                <img src="{{ asset('storage/' . $upsBrand->image) }}" alt="{{ $upsBrand->name }}"
                                    class="mt-2 w-48 rounded-lg border shadow">
                            </div>
                        @endif
                    </section>

                    <!-- Buttons -->
                    <section
                        class="flex flex-col sm:flex-row items-center 
                        space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('ups-brands.index') }}">
                            Back
                        </x-secondary-button>
                        <x-primary-button>
                            Update Brand
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>
    </section>
</x-app-layout>
