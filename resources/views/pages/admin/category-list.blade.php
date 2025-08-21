@extends('layouts.admin.app')
@section('content')
    <main class="px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-gray-800">Category List</h2>
                <a href="{{ route('admin.category-create-page') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Create Category
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Title
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Slug
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Parent Category
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($categories as $category)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $category->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $category->slug }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $category->parent_category }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-2">Edit</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

            <div class="mt-4 flex justify-between items-center">
                <div class="text-sm text-gray-700">
                    Showing <span class="font-medium">{{ $categories->firstItem() }}</span> to <span
                        class="font-medium">{{ $categories->lastItem() }}</span> of <span
                        class="font-medium">{{ $categories->total() }}</span> results
                </div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="{{ url("{$categories->previousPageUrl()}") }}"
                        @if ($categories->currentPage() === 1) class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled-link">
                        @else
                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> @endif
                        <span class="sr-only">Previous</span>
                        <i class="fas fa-chevron-left h-5 w-5"></i>
                    </a>

                    @if ($categories->lastPage() <= 5)
                        @for ($i = 1; $i <= $categories->lastPage(); $i++)
                            <a href="{{ url("{$categories->url($i)}") }}"
                                @if ($categories->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                                {{ $i }} </a>
                        @endfor
                    @elseif ($categories->currentPage() >= $categories->lastPage() - 3)
                        @for ($i = $categories->lastPage() - 4; $i <= $categories->lastPage(); $i++)
                            <a href="{{ url("{$categories->url($i)}") }}"
                                @if ($categories->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                                {{ $i }} </a>
                        @endfor
                    @else
                        @for ($i = $categories->currentPage() === 1 ? 1 : $categories->currentPage() - 1; $categories->currentPage() === 1 ? $i <= $categories->currentPage() + 2 : $i <= $categories->currentPage() + 1; $i++)
                            <a href="{{ url("{$categories->url($i)}") }}"
                                @if ($categories->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                                {{ $i }} </a>
                        @endfor
                        <span
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                        </span>
                        <a href="{{ url("{$categories->url($categories->lastPage())}") }}"
                            @if ($categories->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                            {{ $categories->lastPage() }} </a>
                    @endif



                    <a href="{{ url("{$categories->nextPageUrl()}") }}"
                        @if ($categories->currentPage() === $categories->lastPage()) class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled-link">
                        @else
                            class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> @endif
                        <span class="sr-only">Next</span>
                        <i class="fas fa-chevron-right h-5 w-5"></i>
                    </a>

                </nav>
            </div>
        </div>
    </main>
@endsection
