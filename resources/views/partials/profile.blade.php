<div class="flex items-center space-x-4">
    <button class="md:hidden text-gray-600" id="mobile-menu-button">
        <i class="fas fa-bars text-xl"></i>
    </button>
    <div class="relative">
        <button id="userMenuButton" class="flex items-center space-x-2 focus:outline-none">
            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="User" class="w-8 h-8 rounded-full">
            <span class="hidden md:inline text-gray-700">John Doe</span>
            <i class="fas fa-chevron-down text-gray-500 text-xs"></i>
        </button>
        <div id="userMenu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-50">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Dashboard</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Settings</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Saved
                Articles</a>
            <div class="border-t border-gray-200"></div>
            <a href="{{ route('home.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Sign out</a>
        </div>
    </div>
</div>
