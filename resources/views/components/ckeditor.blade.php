@props([
    'name',
    'id' => null,
    'value' => '',
    'label' => null,
    'optional' => false,
    'limit' => false,
    'placeholder' => 'Write something...',
    'height' => 300,
    'darkTheme' => false,
    'whiteText' => false,
])

<div class="space-y-2">
    {{-- Label --}}
    @if ($label)
        <div class="flex items-center space-x-2">
            <i class="fas fa-align-left text-indigo-500"></i>
            <x-input-label for="{{ $name }}" :value="$label" class="text-base font-medium" />
            @if ($optional)
                <span class="text-gray-400 text-sm">(Optional)</span>
            @endif
        </div>
    @endif

    {{-- CKEditor Container --}}
    <div class="ckeditor-wrapper {{ $darkTheme ? 'dark-theme' : '' }} {{ $whiteText ? 'white-text-editor' : '' }}">
        <div
            class="bg-white border-2 border-gray-200 rounded-lg focus-within:border-indigo-500 focus-within:ring-2 focus-within:ring-indigo-200 transition-all duration-200 {{ $darkTheme ? '!bg-gray-800 !border-gray-600' : '' }}">
            <textarea id="{{ $id ?? $name }}" name="{{ $name }}" class="ckeditor-textarea" placeholder="{{ $placeholder }}">{{ old($name, $value) }}</textarea>
        </div>
    </div>

    {{-- Error + Char Counter --}}
    <div class="flex justify-between items-center">
        <x-input-error :messages="$errors->get($name)" />
        @if ($limit)
            <span class="text-xs text-gray-400" id="charCount-{{ $id ?? $name }}">0/{{ $limit }}
                characters</span>
        @endif
    </div>
</div>

@push('scripts')
    <script defer>
        document.addEventListener('DOMContentLoaded', function() {
            const editorId = "{{ $id ?? $name }}";
            const charCountId = "charCount-{{ $id ?? $name }}";
            const limit = {{ $limit ?: 'null' }};
            const height = {{ $height }};

            ClassicEditor
                .create(document.querySelector(`#${editorId}`), {
                    placeholder: @json($placeholder),
                    toolbar: {
                        items: [
                            'heading',
                            '|',
                            'bold',
                            'italic',
                            'underline',
                            'strikethrough',
                            '|',
                            'fontColor',
                            'fontBackgroundColor',
                            '|',
                            'numberedList',
                            'bulletedList',
                            'outdent',
                            'indent',
                            '|',
                            'alignment',
                            '|',
                            'link',
                            'insertTable',
                            'blockQuote',
                            '|',
                            'undo',
                            'redo',
                            'removeFormat'
                        ]
                    },
                    heading: {
                        options: [{
                                model: 'paragraph',
                                title: 'Paragraph',
                                class: 'ck-heading_paragraph'
                            },
                            {
                                model: 'heading1',
                                view: 'h1',
                                title: 'Heading 1',
                                class: 'ck-heading_heading1'
                            },
                            {
                                model: 'heading2',
                                view: 'h2',
                                title: 'Heading 2',
                                class: 'ck-heading_heading2'
                            },
                            {
                                model: 'heading3',
                                view: 'h3',
                                title: 'Heading 3',
                                class: 'ck-heading_heading3'
                            }
                        ]
                    },
                    table: {
                        contentToolbar: ['tableColumn', 'tableRow', 'mergeTableCells']
                    }
                })
                .then(editor => {
                    // Set editor height
                    editor.editing.view.change(writer => {
                        writer.setStyle('min-height', `${height}px`, editor.editing.view.document
                            .getRoot());
                    });

                    // Character limit and counter functionality
                    if (limit) {
                        const charCountEl = document.getElementById(charCountId);

                        function updateCharCount() {
                            const text = editor.getData().replace(/<[^>]*>/g, ''); // Strip HTML tags
                            const count = text.trim().length;

                            if (charCountEl) {
                                charCountEl.textContent = `${count}/${limit} characters`;
                                charCountEl.style.color = count > limit ? '#ef4444' : '#9ca3af';
                            }

                            // Prevent exceeding limit
                            if (count > limit) {
                                const currentData = editor.getData();
                                const truncatedText = text.substring(0, limit);
                                // This is a simple truncation - you might want more sophisticated handling
                                editor.setData(currentData.substring(0, currentData.length - (count - limit)));
                            }
                        }

                        // Update count on content change
                        editor.model.document.on('change:data', updateCharCount);

                        // Initial count
                        updateCharCount();
                    }

                    // Handle form submission
                    const form = document.querySelector(`#${editorId}`).closest('form');
                    if (form) {
                        form.addEventListener('submit', function() {
                            // CKEditor automatically updates the textarea value
                            // No additional action needed
                        });
                    }
                })
                .catch(error => {
                    console.error('CKEditor initialization error:', error);
                });
        });
    </script>
@endpush

@push('styles')
    <style>
        .ckeditor-wrapper .ck-editor__editable {
            border-radius: 0 0 0.5rem 0.5rem;
        }

        .ckeditor-wrapper .ck-toolbar {
            border-radius: 0.5rem 0.5rem 0 0;
            border-color: #e5e7eb;
        }

        .ckeditor-wrapper .ck-editor__editable_inline {
            border-color: #e5e7eb;
        }

        .ckeditor-wrapper:focus-within .ck-toolbar,
        .ckeditor-wrapper:focus-within .ck-editor__editable_inline {
            border-color: #6366f1 !important;
        }

        .ckeditor-wrapper .ck-content {
            font-size: 14px;
        }

        /* Hide the original textarea */
        .ckeditor-textarea {
            display: none;
        }

        /* Dark Theme / White Text Styling */
        .ckeditor-wrapper.dark-theme .ck-toolbar {
            background: #374151 !important;
            border-color: #4b5563 !important;
        }

        .ckeditor-wrapper.dark-theme .ck-editor__editable_inline {
            background: #1f2937 !important;
            color: #ffffff !important;
            border-color: #4b5563 !important;
        }

        .ckeditor-wrapper.dark-theme .ck-toolbar .ck-button {
            color: #ffffff !important;
        }

        .ckeditor-wrapper.dark-theme .ck-toolbar .ck-button:not(.ck-disabled):hover {
            background: #4b5563 !important;
        }

        .ckeditor-wrapper.dark-theme .ck-toolbar .ck-button.ck-on {
            background: #6366f1 !important;
            color: #ffffff !important;
        }

        .ckeditor-wrapper.dark-theme .ck-dropdown__panel {
            background: #374151 !important;
            border-color: #4b5563 !important;
        }

        .ckeditor-wrapper.dark-theme .ck-list__item {
            color: #ffffff !important;
        }

        .ckeditor-wrapper.dark-theme .ck-list__item:hover {
            background: #4b5563 !important;
        }

        /* Alternative: Force white text globally in editor */
        .white-text-editor .ck-content {
            color: #ffffff !important;
        }

        .white-text-editor .ck-content p {
            color: #ffffff !important;
        }

        .white-text-editor .ck-content * {
            color: inherit !important;
        }
    </style>
@endpush
