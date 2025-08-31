<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Edit Postingan" subtitle="Perbarui detail postingan Anda" button-route="posts.index"
            button-text="Kembali" />
    </x-slot>

    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <main class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-edit text-indigo-500"></i>
                    Edit Informasi Postingan
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Silakan perbarui detail di bawah ini untuk mengedit postingan Anda.
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('posts.update', $post->id) }}" enctype="multipart/form-data"
                    class="space-y-8">
                    @csrf
                    @method('PUT')

                    <!-- Post Title Section -->
                    <section class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="title" :value="__('Judul Postingan')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="title"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="title" :value="old('title', $post->title)" required autofocus
                            placeholder="Masukkan judul postingan" />
                        <x-input-error :messages="$errors->get('title')" class="mt-2" />
                    </section>

                    {{-- Content --}}
                    <x-ckeditor id="content" name="content" label="Konten Postingan"
                        placeholder="Masukkan konten postingan" :value="old('content', $post->content)" />

                    {{-- Thumbnail --}}
                    <section class="space-y-2">
                        <x-image-upload id="thumbnail" name="thumbnail" label="Gambar Thumbnail" :optional="true"
                            recommended="400x300px untuk hasil terbaik" />

                        @if ($post->thumbnail)
                            <div class="mt-2">
                                <p class="text-sm text-gray-600 mb-1">Thumbnail saat ini:</p>
                                <img src="{{ Storage::url($post->thumbnail) }}" alt="Thumbnail"
                                    class="w-40 rounded shadow">
                            </div>
                        @endif
                    </section>

                    {{-- Status & Author --}}
                    <section class="flex w-full gap-6">
                        <div class="space-y-2 w-full">
                            <x-input-label for="status" :value="__('Status Postingan')" class="text-base font-medium" />
                            <x-select name="status" :options="['draft' => 'Draft', 'published' => 'Published']" selected="{{ old('status', $post->status) }}" />
                        </div>
                        <div class="space-y-2 w-full">
                            <x-input-label for="user_id" :value="__('Di Posting Oleh')" class="text-base font-medium" />
                            <x-select name="user_id" :options="$users"
                                selected="{{ old('user_id', $post->user_id) }}" />
                        </div>
                    </section>

                    {{-- SEO Section --}}
                    <section class="flex w-full gap-6">
                        <div class="space-y-2 w-full">
                            <x-input-label for="meta_title" :value="__('Meta Title')" class="text-base font-medium" />
                            <x-text-input id="meta_title" name="meta_title" :value="old('meta_title', $post->meta_title)"
                                placeholder="Masukkan meta title" class="block w-full" />
                        </div>
                        <div class="space-y-2 w-full">
                            <x-input-label for="meta_description" :value="__('Meta Description')" class="text-base font-medium" />
                            <x-text-input id="meta_description" name="meta_description" :value="old('meta_description', $post->meta_description)"
                                placeholder="Masukkan meta description" class="block w-full" />
                        </div>
                        <div class="space-y-2 w-full">
                            <x-input-label for="meta_keywords" :value="__('Meta Keywords')" class="text-base font-medium" />
                            <x-text-input id="meta_keywords" name="meta_keywords" :value="old('meta_keywords', $post->meta_keywords)"
                                placeholder="Masukkan meta keywords" class="block w-full" />
                        </div>
                    </section>

                    {{-- Buttons --}}
                    <section
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('posts.index') }}">
                            Cancel
                        </x-secondary-button>
                        <x-primary-button>
                            Update Post
                        </x-primary-button>
                    </section>
                </form>
            </div>
        </main>
    </section>
</x-app-layout>
