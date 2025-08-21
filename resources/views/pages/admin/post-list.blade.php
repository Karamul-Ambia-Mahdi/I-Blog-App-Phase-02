@extends('layouts.admin.app')
@section('content')
    <main class="px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-md mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold text-gray-800">Category List</h2>
                <a href="{{ route('admin.post-create-page') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Create Post
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
                                Description
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Category
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        @foreach ($posts as $post)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ $post->title }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $post->description }}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{ $post->category->title}}
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
                    Showing <span class="font-medium">{{ $posts->firstItem() }}</span> to <span
                        class="font-medium">{{ $posts->lastItem() }}</span> of <span
                        class="font-medium">{{ $posts->total() }}</span> results
                </div>
                <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                    <a href="{{ url("{$posts->previousPageUrl()}") }}"
                        @if ($posts->currentPage() === 1) class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled-link">
                        @else
                            class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50"> @endif
                        <span class="sr-only">Previous</span>
                        <i class="fas fa-chevron-left h-5 w-5"></i>
                    </a>

                    @if ($posts->lastPage() <= 5)
                        @for ($i = 1; $i <= $posts->lastPage(); $i++)
                            <a href="{{ url("{$posts->url($i)}") }}"
                                @if ($posts->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                                {{ $i }} </a>
                        @endfor
                    @elseif ($posts->currentPage() >= $posts->lastPage() - 3)
                        @for ($i = $posts->lastPage() - 4; $i <= $posts->lastPage(); $i++)
                            <a href="{{ url("{$posts->url($i)}") }}"
                                @if ($posts->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                                {{ $i }} </a>
                        @endfor
                    @else
                        @for ($i = $posts->currentPage() === 1 ? 1 : $posts->currentPage() - 1; $posts->currentPage() === 1 ? $i <= $posts->currentPage() + 2 : $i <= $posts->currentPage() + 1; $i++)
                            <a href="{{ url("{$posts->url($i)}") }}"
                                @if ($posts->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                                {{ $i }} </a>
                        @endfor
                        <span
                            class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                        </span>
                        <a href="{{ url("{$posts->url($posts->lastPage())}") }}"
                            @if ($posts->currentPage() == $i) class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-blue-600 text-sm font-medium text-white hover:bg-blue-700 disabled-link">
                            @else
                                class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"> @endif
                            {{ $posts->lastPage() }} </a>
                    @endif



                    <a href="{{ url("{$posts->nextPageUrl()}") }}"
                        @if ($posts->currentPage() === $posts->lastPage()) class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 disabled-link">
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
