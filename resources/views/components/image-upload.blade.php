@props([
    'id' => 'image',
    'name' => 'image',
    'label' => 'Upload Image',
    'optional' => false,
    'recommended' => null,
])

<div>
    <!-- Label -->
    <div class="flex items-center space-x-2 mb-2">
        <i class="fas fa-image text-indigo-500"></i>
        <x-input-label :for="$id" :value="$label" class="text-base font-medium" />

        @if ($optional)
            <span class="text-gray-400 text-sm">(Optional)</span>
        @else
            <span class="text-red-500 text-sm">*</span>
        @endif
    </div>

    <!-- Upload Area -->
    <div class="relative">
        <input id="{{ $id }}" name="{{ $name }}" type="file" class="hidden"
            onchange="previewImage('{{ $id }}')" />
        <label for="{{ $id }}"
            class="flex flex-col items-center justify-center w-full h-48 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100 transition-colors duration-200">
            <div class="flex flex-col items-center justify-center pt-5 pb-6" id="uploadArea-{{ $id }}">
                <i class="fas fa-cloud-upload-alt text-4xl text-gray-400 mb-4"></i>
                <p class="mb-2 text-sm text-gray-500">
                    <span class="font-semibold">Click to upload</span> or drag and drop
                </p>
                <p class="text-xs text-gray-500">PNG, JPG, JPEG or GIF (MAX. 2MB)</p>
            </div>
            <img id="preview-{{ $id }}" class="hidden w-full h-full rounded-lg object-contain bg-white" />
        </label>
    </div>

    <!-- Error -->
    <x-input-error :messages="$errors->get($name)" class="mt-2" />

    <!-- Recommended size -->
    @if ($recommended)
        <div class="flex items-center space-x-2 text-sm text-gray-500 mt-1">
            <i class="fas fa-info-circle"></i>
            <span>Ukuran yang direkomendasikan: {{ $recommended }}</span>
        </div>
    @endif
</div>
<script>
    // Image preview functionality
    function previewImage(id) {
        const input = document.getElementById(id);
        const file = input.files[0];
        const preview = document.getElementById('preview-' + id);
        const uploadArea = document.getElementById('uploadArea-' + id);

        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                preview.src = e.target.result;
                preview.classList.remove('hidden');
                uploadArea.classList.add('hidden');
            }
            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden');
            uploadArea.classList.remove('hidden');
        }
    }

    // Character counter for description
    document.getElementById('description').addEventListener('input', function() {
        const current = this.value.length;
        const max = 500;
        document.getElementById('charCount').textContent = current + '/' + max + ' characters';

        if (current > max * 0.9) {
            document.getElementById('charCount').classList.add('text-red-500');
        } else {
            document.getElementById('charCount').classList.remove('text-red-500');
        }
    });

    // Status text update
    function updateStatusText(checkbox) {
        const statusText = document.getElementById('statusText');
        statusText.textContent = checkbox.checked ? 'Active' : 'Inactive';
        statusText.className = checkbox.checked ? 'text-sm text-green-600' : 'text-sm text-gray-600';
    }

    // Form validation enhancement
    document.getElementById('categoryForm').addEventListener('submit', function(e) {
        const nameInput = document.getElementById('name');
        if (!nameInput.value.trim()) {
            e.preventDefault();
            nameInput.focus();
            nameInput.classList.add('border-red-500');

            // Show error message
            const errorDiv = document.createElement('div');
            errorDiv.className = 'text-red-500 text-sm mt-1';
            errorDiv.textContent = 'Category name is required';
            nameInput.parentNode.appendChild(errorDiv);

            setTimeout(() => {
                errorDiv.remove();
                nameInput.classList.remove('border-red-500');
            }, 3000);
        }
    });

    // Auto-resize textarea
    document.getElementById('description').addEventListener('input', function() {
        this.style.height = 'auto';
        this.style.height = Math.min(this.scrollHeight, 200) + 'px';
    });
</script>
