<x-app-layout>
    <x-slot name="header">
        <x-page-header title="Dokumentasi" subtitle="Kelola dokumentasi Anda" button-route="documentations.create"
            button-text="Tambah" />
    </x-slot>

    <main class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Alert Messages -->
            @if (session('success'))
                <x-alert type="success" :message="session('success')" />
            @endif

            @if (session('error'))
                <x-alert type="error" :message="session('error')" />
            @endif

            <section class="bg-white overflow-hidden shadow-xl sm:rounded-xl border border-gray-100">
                <x-data-table :data="$documentations" :columns="[
                    [
                        'label' => 'Image',
                        'field' => 'image',
                        'type' => 'image',
                        'showName' => true,
                        'nameField' => 'title',
                    ],
                    [
                        'label' => 'Title',
                        'field' => 'title',
                        'type' => 'text',
                        'textClass' => 'font-semibold text-gray-900',
                    ],
                    [
                        'label' => 'Description',
                        'field' => 'content',
                        'type' => 'html',
                        'limit' => 100,
                        'maxWidth' => 'max-w-md',
                        'clamp' => 'line-clamp-3',
                    ],
                    [
                        'label' => 'Created',
                        'field' => 'created_at',
                        'type' => 'date',
                        'format' => 'M d, Y',
                        'showDiff' => true,
                    ],
                ]" :actions="[
                    [
                        'type' => 'link',
                        'route' => 'documentations.edit',
                        'label' => 'Edit',
                        'class' => 'text-amber-700 bg-amber-100 hover:bg-amber-200',
                        'icon' =>
                            'M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z',
                    ],
                    [
                        'type' => 'form',
                        'route' => 'documentations.destroy',
                        'method' => 'DELETE',
                        'label' => 'Delete',
                        'class' => 'text-red-700 bg-red-100 hover:bg-red-200',
                        'icon' =>
                            'M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16',
                        'confirm' => 'Are you sure you want to delete this documentation?',
                    ],
                ]" :searchable="true" :searchRoute="route('documentations.index')"
                    :searchQuery="request('search', '')" :emptyTitle="'No documentations found'" :emptyMessage="'No documentation files have been created yet. Start by adding your first documentation.'" :createRoute="route('documentations.create')" :createText="'Add New Documentation'"
                    :showNumbers="true" />
            </section>
        </div>
    </main>
</x-app-layout>
