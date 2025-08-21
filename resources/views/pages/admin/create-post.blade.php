@extends('layouts.admin.app')
@section('content')
    <main class="px-4 py-6 sm:px-6 lg:px-8">
        <div class="bg-white p-6 rounded-lg shadow-md mb-8 max-w-3xl mx-auto">
            <h2 class="text-xl font-bold mb-4 text-gray-800">Create New Post</h2>
            <form action="{{ route('admin.post-create') }}" method="POST" class="space-y-6">
                @csrf
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title <span
                            class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title" value="{{ old('title') }}"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">
                    <br>
                    @error('title')
                        <span
                            class="text-red-500 border border-red-300 rounded-md mt-2 p-2 block w-full">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description <span
                            class="text-red-500">*</span></label>
                    <textarea id="description" name="description" rows="4"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring-blue-500 focus:border-blue-500">{{ old('description') }}</textarea>
                    <br>
                    @error('description')
                        <span
                            class="text-red-500 border border-red-300 rounded-md mt-2 p-2 block w-full">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Category -->
                <div>
                    <label for="category_id" class="block text-sm font-medium text-gray-700">Category <span
                            class="text-red-500">*</span></label>
                    <select id="category_id" name="category_id"
                        class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 bg-white focus:ring-blue-500 focus:border-blue-500">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                    <br>
                    @error('category_id')
                        <span
                            class="text-red-500 border border-red-300 rounded-md mt-2 p-2 block w-full">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <div class="text-right">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-medium px-4 py-2 rounded-md">
                        Create Post
                    </button>
                </div>
            </form>
            @if (session('success'))
                <span
                    class="text-blue-700 font-bold border border-blue-500 rounded-md mt-2 p-2 block w-full">{{ session('success') }}</span>
            @endif
        </div>
    </main>
@endsection
