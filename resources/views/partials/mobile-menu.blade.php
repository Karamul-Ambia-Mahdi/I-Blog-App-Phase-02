<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden bg-white shadow-md">
    <div class="container mx-auto px-4 py-4">
        <a href="{{ route('home.index') }}" class="block py-2 text-blue-600 font-medium">Home</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Articles</a>
        <div class="relative">
            <button
                class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-toggle">
                Categories
                <i class="fas fa-chevron-down ml-1 text-sm"></i>
            </button>
            <div id="mobile-categories" class="hidden pl-4 mobile-dropdown-menu">
                <div class="py-1">
                    <div class="relative">
                        <button
                            class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                            Web Development
                            <i class="fas fa-chevron-down ml-1 text-sm"></i>
                        </button>
                        <div id="mobile-webdev-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                            <a href="{{ route('home.categories') }}"
                                class="block py-2 text-gray-600 hover:text-blue-600 transition">Frontend</a>
                            <a href="{{ route('home.categories') }}"
                                class="block py-2 text-gray-600 hover:text-blue-600 transition">Backend</a>
                            <a href="{{ route('home.categories') }}" class="block py-2 text-gray-600 hover:text-blue-600 transition">Full
                                Stack</a>
                        </div>
                    </div>
                    <div class="relative">
                        <button
                            class="block py-2 text-gray-600 hover:text-blue-600 transition flex items-center w-full text-left mobile-dropdown-sub-toggle">
                            Artificial Intelligence
                            <i class="fas fa-chevron-down ml-1 text-sm"></i>
                        </button>
                        <div id="mobile-ai-submenu" class="hidden pl-4 mobile-dropdown-submenu">
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Machine
                                Learning</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Deep
                                Learning</a>
                            <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">NLP</a>
                        </div>
                    </div>
                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cloud
                        Computing</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Cybersecurity</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Mobile
                        Development</a>
                    <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">DevOps</a>
                </div>
            </div>
        </div>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">About</a>
        <a href="#" class="block py-2 text-gray-600 hover:text-blue-600 transition">Contact</a>
    </div>
</div>
