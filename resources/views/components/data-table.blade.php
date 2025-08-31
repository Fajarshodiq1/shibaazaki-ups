@props([
    'columns' => [],
    'data' => null,
    'emptyTitle' => 'No data found',
    'emptyMessage' => 'No items have been created yet.',
    'createRoute' => null,
    'createText' => 'Create New Item',
    'actions' => [],
    'tableClass' => '',
    'showNumbers' => true,
    'searchable' => false,
    'searchQuery' => '',
    'searchRoute' => null,
])

<div class="bg-white shadow-sm rounded-lg border border-gray-200">
    @if ($searchable && $searchRoute)
        <!-- Search Bar -->
        <div class="p-6 border-b border-gray-200">
            <form method="GET" action="{{ $searchRoute }}" class="max-w-md">
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                    <input type="text" name="search" value="{{ $searchQuery }}"
                        class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                        placeholder="Search...">
                </div>
            </form>
        </div>
    @endif

    @if ($data && $data->count() > 0)
        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 {{ $tableClass }}">
                <thead class="bg-gray-50">
                    <tr>
                        @if ($showNumbers)
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                <div class="flex items-center space-x-1">
                                    <span>#</span>
                                </div>
                            </th>
                        @endif

                        @foreach ($columns as $column)
                            <th scope="col"
                                class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider {{ $column['class'] ?? '' }}">
                                {{ $column['label'] }}
                                @if (isset($column['sortable']) && $column['sortable'])
                                    <svg class="w-3 h-3 ml-1 inline" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4"></path>
                                    </svg>
                                @endif
                            </th>
                        @endforeach

                        @if (count($actions) > 0 || isset($columns[0]['actions']))
                            <th scope="col"
                                class="px-6 py-4 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Actions
                            </th>
                        @endif
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($data as $index => $item)
                        <tr class="hover:bg-gray-50 transition-colors duration-200 group">
                            @if ($showNumbers)
                                <!-- Row Number -->
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span
                                            class="inline-flex items-center justify-center h-8 w-8 rounded-full bg-gray-100 text-gray-800 text-sm font-medium group-hover:bg-blue-100 group-hover:text-blue-800 transition-colors duration-200">
                                            {{ method_exists($data, 'firstItem') ? $data->firstItem() + $index : $index + 1 }}
                                        </span>
                                    </div>
                                </td>
                            @endif

                            @foreach ($columns as $column)
                                <td class="px-6 py-4 {{ $column['nowrap'] ?? true ? 'whitespace-nowrap' : '' }}">
                                    @if (isset($column['type']))
                                        @switch($column['type'])
                                            @case('image')
                                                <div class="flex items-center space-x-4">
                                                    <div class="flex-shrink-0">
                                                        @php
                                                            $imageValue = data_get($item, $column['field']);
                                                            $nameValue = data_get(
                                                                $item,
                                                                $column['nameField'] ?? 'name',
                                                            );
                                                        @endphp
                                                        @if ($imageValue)
                                                            <img class="h-12 w-12 rounded-xl object-cover border-2 border-gray-200 shadow-sm group-hover:shadow-md transition-shadow duration-200"
                                                                src="{{ Storage::url($imageValue) }}" alt="{{ $nameValue }}">
                                                        @else
                                                            <div
                                                                class="h-12 w-12 rounded-xl bg-gradient-to-br from-gray-200 to-gray-300 flex items-center justify-center border-2 border-gray-200 group-hover:from-blue-200 group-hover:to-blue-300 group-hover:border-blue-300 transition-all duration-200">
                                                                <svg class="h-6 w-6 text-gray-500 group-hover:text-blue-600 transition-colors duration-200"
                                                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                                        stroke-width="2"
                                                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        @endif
                                                    </div>
                                                    @if (isset($column['showName']) && $column['showName'])
                                                        <div class="min-w-0 flex-1">
                                                            <p class="text-sm font-semibold text-gray-900 truncate">
                                                                {{ $nameValue }}
                                                            </p>
                                                        </div>
                                                    @endif
                                                </div>
                                            @break

                                            @case('text')
                                                <div class="text-sm {{ $column['textClass'] ?? 'text-gray-900' }}">
                                                    {{ data_get($item, $column['field']) }}
                                                </div>
                                            @break

                                            @case('html')
                                                <div class="text-sm text-gray-600 {{ $column['maxWidth'] ?? 'max-w-xs' }}">
                                                    <div class="{{ $column['clamp'] ?? 'line-clamp-2' }}">
                                                        {!! Str::limit(strip_tags(data_get($item, $column['field'])), $column['limit'] ?? 100) !!}
                                                    </div>
                                                </div>
                                            @break

                                            @case('date')
                                                <div>
                                                    <div class="text-sm text-gray-900 font-medium">
                                                        {{ data_get($item, $column['field'])->format($column['format'] ?? 'M d, Y') }}
                                                    </div>
                                                    @if ($column['showDiff'] ?? true)
                                                        <div class="text-xs text-gray-500">
                                                            {{ data_get($item, $column['field'])->diffForHumans() }}
                                                        </div>
                                                    @endif
                                                </div>
                                            @break

                                            @case('badge')
                                                @php
                                                    $value = data_get($item, $column['field']);
                                                    $badgeConfig =
                                                        $column['badges'][$value] ??
                                                        ($column['badges']['default'] ?? []);
                                                @endphp
                                                <span
                                                    class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium {{ $badgeConfig['class'] ?? 'bg-gray-100 text-gray-800' }}">
                                                    {{ $badgeConfig['label'] ?? $value }}
                                                </span>
                                            @break

                                            @case('currency')
                                                <div class="text-sm font-medium text-gray-900">
                                                    {{ $column['currency'] ?? 'Rp ' }}{{ number_format(data_get($item, $column['field']), 0, ',', '.') }}
                                                </div>
                                            @break

                                            @case('boolean')
                                                <div class="flex items-center">
                                                    @if (data_get($item, $column['field']))
                                                        <svg class="h-5 w-5 text-green-500" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    @else
                                                        <svg class="h-5 w-5 text-red-500" fill="currentColor"
                                                            viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    @endif
                                                </div>
                                            @break

                                            @case('custom')
                                                @include($column['view'], ['item' => $item])
                                            @break

                                            @default
                                                {{ data_get($item, $column['field']) }}
                                        @endswitch
                                    @else
                                        {{ data_get($item, $column['field']) }}
                                    @endif
                                </td>
                            @endforeach

                            @if (count($actions) > 0 || isset($columns[0]['actions']))
                                <!-- Actions -->
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex items-center justify-end space-x-2">
                                        @foreach ($actions as $action)
                                            @if ($action['type'] === 'link')
                                                <a href="{{ route($action['route'], $item->id) }}"
                                                    class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-lg {{ $action['class'] ?? 'text-blue-700 bg-blue-100 hover:bg-blue-200 hover:text-blue-800' }} focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-150 ease-in-out"
                                                    @if (isset($action['target'])) target="{{ $action['target'] }}" @endif>
                                                    @if (isset($action['icon']))
                                                        <svg class="w-3 h-3 mr-1" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="{{ $action['icon'] }}"></path>
                                                        </svg>
                                                    @endif
                                                    {{ $action['label'] }}
                                                </a>
                                            @elseif($action['type'] === 'form')
                                                <form action="{{ route($action['route'], $item->id) }}" method="POST"
                                                    class="inline-block">
                                                    @csrf
                                                    @method($action['method'])
                                                    <button type="submit"
                                                        onclick="return confirm('{{ $action['confirm'] }}')"
                                                        class="inline-flex items-center px-3 py-1.5 border border-transparent text-xs leading-4 font-medium rounded-lg {{ $action['class'] ?? 'text-red-700 bg-red-100 hover:bg-red-200 hover:text-red-800' }} focus:outline-none focus:ring-2 focus:ring-offset-2 transition duration-150 ease-in-out">
                                                        @if (isset($action['icon']))
                                                            <svg class="w-3 h-3 mr-1" fill="none"
                                                                stroke="currentColor" viewBox="0 0 24 24">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="{{ $action['icon'] }}"></path>
                                                            </svg>
                                                        @endif
                                                        {{ $action['label'] }}
                                                    </button>
                                                </form>
                                            @endif
                                        @endforeach
                                    </div>
                                </td>
                            @endif
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if (method_exists($data, 'links'))
            <!-- Pagination -->
            <div class="px-6 py-4 border-t border-gray-200">
                {{ $data->links() }}
            </div>
        @endif
    @else
        <!-- Empty State -->
        <div class="text-center py-16">
            <div class="mx-auto flex items-center justify-center h-20 w-20 rounded-full bg-gray-100 mb-6">
                <svg class="h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10">
                    </path>
                </svg>
            </div>
            <h3 class="text-xl font-semibold text-gray-900 mb-2">{{ $emptyTitle }}</h3>
            <p class="text-gray-600 mb-8 max-w-md mx-auto">{{ $emptyMessage }}</p>
            @if ($createRoute)
                <a href="{{ $createRoute }}"
                    class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-700 hover:to-blue-800 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4">
                        </path>
                    </svg>
                    {{ $createText }}
                </a>
            @endif
        </div>
    @endif
</div>
