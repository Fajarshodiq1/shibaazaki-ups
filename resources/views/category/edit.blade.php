<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Edit Category" subtitle="Update category details and keep your content organized"
            button-route="categories.index" button-text="Back to Categories" />
    </x-slot>

    <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-8">
        <!-- Main Form Card -->
        <div class="bg-white overflow-hidden shadow-lg sm:rounded-xl border border-gray-200">
            <div class="px-8 py-6 border-b border-gray-200 bg-gradient-to-r from-indigo-50 to-purple-50">
                <h3 class="text-lg font-semibold text-gray-800">
                    <i class="fas fa-edit text-indigo-500 mr-2"></i>
                    Edit Category
                </h3>
                <p class="text-gray-600 text-sm mt-1">
                    Make changes to the category information below
                </p>
            </div>

            <div class="p-8">
                <form method="POST" action="{{ route('categories.update', $category->id) }}"
                    enctype="multipart/form-data" class="space-y-8" id="categoryForm">
                    @csrf
                    @method('PUT')

                    <!-- Category Name -->
                    <div class="space-y-2">
                        <div class="flex items-center space-x-2">
                            <i class="fas fa-tag text-indigo-500"></i>
                            <x-input-label for="name" :value="__('Category Name')" class="text-base font-medium" />
                            <span class="text-red-500">*</span>
                        </div>
                        <x-text-input id="name"
                            class="block w-full text-lg py-3 px-4 border-2 border-gray-200 rounded-lg focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 transition-all duration-200"
                            type="text" name="name" :value="old('name', $category->name)" required autofocus />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        <div class="flex items-center space-x-2 text-sm text-gray-500">
                            <i class="fas fa-lightbulb"></i>
                            <span>URL slug will be automatically updated if you change the name</span>
                        </div>
                    </div>

                    <!-- Category Image -->
                    <div class="space-y-2">
                        <x-image-upload id="category_image" name="image" label="Category Image" :optional="true"
                            recommended="400x300px for best results" />

                        <!-- Show existing image -->
                        @if ($category->image)
                            <div class="mt-3">
                                <p class="text-sm text-gray-600 mb-1">Current Image:</p>
                                <img src="{{ asset('storage/' . $category->image) }}" alt="Category Image"
                                    class="w-48 h-36 object-contain rounded-lg border border-gray-200 bg-white">
                            </div>
                        @endif
                    </div>

                    <!-- Description -->
                    <x-ckeditor id="description" name="description" label="Description" placeholder="Masukkan deskripsi"
                        :value="old('description', $category->description)" />

                    <!-- Status -->
                    <div class="bg-gray-50 rounded-lg p-6 border border-gray-200">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center space-x-3">
                                <i class="fas fa-toggle-on text-green-500 text-xl"></i>
                                <div>
                                    <h4 class="font-medium text-gray-800">Category Status</h4>
                                    <p class="text-sm text-gray-600">Toggle whether this category is active</p>
                                </div>
                            </div>
                            <div class="flex items-center space-x-3">
                                <span class="text-sm text-gray-600" id="statusText">
                                    {{ $category->is_active ? 'Active' : 'Inactive' }}
                                </span>
                                <label class="relative inline-flex items-center cursor-pointer">
                                    <input id="is_active" name="is_active" type="checkbox" value="1"
                                        {{ old('is_active', $category->is_active) ? 'checked' : '' }}
                                        class="sr-only peer" onchange="updateStatusText(this)">
                                    <div
                                        class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-indigo-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-indigo-600">
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Actions -->
                    <div
                        class="flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-4 pt-6 border-t border-gray-200">
                        <x-secondary-button href="{{ route('categories.index') }}">
                            Cancel
                        </x-secondary-button>
                        <x-primary-button>
                            Update Category
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
