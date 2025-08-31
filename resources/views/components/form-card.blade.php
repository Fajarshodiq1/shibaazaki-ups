@props([
    'action',
    'method' => 'POST',
    'title' => null,
    'subtitle' => null,
    'enctype' => null,
    'id' => 'defaultForm',
])

<div class="bg-white shadow-lg rounded-lg overflow-hidden">
    @if ($title || $subtitle)
        <div class="bg-gradient-to-r from-blue-600 to-blue-700 px-6 py-4">
            @if ($title)
                <h2 class="text-xl font-semibold text-white">{{ $title }}</h2>
            @endif
            @if ($subtitle)
                <p class="text-blue-100 mt-1">{{ $subtitle }}</p>
            @endif
        </div>
    @endif

    <div class="p-6">
        <form action="{{ $action }}" method="{{ $method === 'GET' ? 'GET' : 'POST' }}" id="{{ $id }}"
            @if ($enctype) enctype="{{ $enctype }}" @endif
            {{ $attributes->merge(['class' => 'space-y-6']) }}>
            @if ($method !== 'GET' && $method !== 'POST')
                @method($method)
            @endif

            @if ($method !== 'GET')
                @csrf
            @endif

            <!-- Form Content -->
            <div class="space-y-4">
                {{ $slot }}
            </div>

            <!-- Action Buttons -->
            @if (isset($actions))
                <div class="flex items-center justify-end space-x-3 pt-6 border-t border-gray-200">
                    {{ $actions }}
                </div>
            @endif
        </form>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('{{ $id }}');

            // Image preview functionality
            window.previewImage = function(input, previewId = 'imagePreview', uploadAreaId = 'uploadArea') {
                const file = input.files[0];
                const preview = document.getElementById(previewId);
                const uploadArea = document.getElementById(uploadAreaId);

                if (file) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        if (preview) {
                            preview.src = e.target.result;
                            preview.classList.remove('hidden');
                        }
                        if (uploadArea) {
                            uploadArea.classList.add('hidden');
                        }
                    }
                    reader.readAsDataURL(file);
                } else {
                    if (preview) {
                        preview.classList.add('hidden');
                    }
                    if (uploadArea) {
                        uploadArea.classList.remove('hidden');
                    }
                }
            };

            // Character counter for textareas
            const textareas = form.querySelectorAll('textarea[data-max-length]');
            textareas.forEach(function(textarea) {
                const maxLength = parseInt(textarea.dataset.maxLength);
                const counterId = textarea.dataset.counter || textarea.id + 'Count';
                let counter = document.getElementById(counterId);

                if (!counter) {
                    counter = document.createElement('div');
                    counter.id = counterId;
                    counter.className = 'text-sm text-gray-500 mt-1';
                    textarea.parentNode.appendChild(counter);
                }

                function updateCounter() {
                    const current = textarea.value.length;
                    counter.textContent = current + '/' + maxLength + ' characters';

                    if (current > maxLength * 0.9) {
                        counter.classList.add('text-red-500');
                        counter.classList.remove('text-gray-500');
                    } else {
                        counter.classList.remove('text-red-500');
                        counter.classList.add('text-gray-500');
                    }
                }

                textarea.addEventListener('input', updateCounter);
                updateCounter();
            });

            // Status toggle functionality
            window.updateStatusText = function(checkbox, statusTextId = 'statusText') {
                const statusText = document.getElementById(statusTextId);
                if (statusText) {
                    statusText.textContent = checkbox.checked ? 'Active' : 'Inactive';
                    statusText.className = checkbox.checked ? 'text-sm text-green-600 font-medium' :
                        'text-sm text-gray-600';
                }
            };

            // Auto-resize textareas
            const autoResizeTextareas = form.querySelectorAll('textarea[data-auto-resize]');
            autoResizeTextareas.forEach(function(textarea) {
                textarea.addEventListener('input', function() {
                    this.style.height = 'auto';
                    const maxHeight = parseInt(this.dataset.maxHeight) || 200;
                    this.style.height = Math.min(this.scrollHeight, maxHeight) + 'px';
                });
            });

            // Enhanced form validation
            if (form) {
                form.addEventListener('submit', function(e) {
                    let hasError = false;

                    // Clear previous error states
                    const errorElements = form.querySelectorAll('.validation-error');
                    errorElements.forEach(el => el.remove());

                    const inputs = form.querySelectorAll(
                        'input[required], textarea[required], select[required]');
                    inputs.forEach(function(input) {
                        input.classList.remove('border-red-500');

                        if (!input.value.trim()) {
                            hasError = true;
                            input.classList.add('border-red-500');
                            input.focus();

                            const errorDiv = document.createElement('div');
                            errorDiv.className = 'validation-error text-red-500 text-sm mt-1';
                            errorDiv.textContent = input.dataset.errorMessage || (input.name.charAt(
                                0).toUpperCase() + input.name.slice(1) + ' is required');
                            input.parentNode.appendChild(errorDiv);

                            setTimeout(() => {
                                errorDiv.remove();
                                input.classList.remove('border-red-500');
                            }, 5000);

                            return false;
                        }
                    });

                    if (hasError) {
                        e.preventDefault();
                    }
                });
            }
        });
    </script>
@endpush
