<!-- Header/Navigation -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4 md:py-0  flex justify-between items-center">
        <div class="flex items-center space-x-2">
            <a href="{{ route('home.index') }}" class="flex items-center space-x-2">
                <i class="fas fa-blog text-2xl text-blue-600"></i>
                <h1 class="text-2xl font-bold text-gray-800">I<span class="text-blue-600">Blog</span></h1>
            </a>
        </div>

        {{-- Nav --}}
        @include('partials.nav')

        {{-- Header Section --}}
        @yield('header-section')
    </div>

    {{-- Mobile Menu --}}
    @include('partials.mobile-menu')
</header>
