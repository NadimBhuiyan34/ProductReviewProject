<header class="bg-blue-900 text-white sticky top-0 z-50 shadow-lg">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
            <img src="https://i.pinimg.com/736x/f2/12/4e/f2124e83e9fd8ddeb31ac7cdb59f544c.jpg" alt="Logo" class="w-12 h-12 rounded-full shadow-md">
            <span class="text-2xl font-bold tracking-wide">QuickShop</span>
        </a>

        <!-- Navigation Menu -->
        <nav class="hidden md:flex space-x-6 text-sm font-medium">
            <a href="#" class="hover:text-indigo-400 transition transform hover:scale-105">Home</a>
            <a href="#" class="hover:text-indigo-400 transition transform hover:scale-105">Shop</a>
            <a href="#" class="hover:text-indigo-400 transition transform hover:scale-105">Categories</a>
            <a href="#" class="hover:text-indigo-400 transition transform hover:scale-105">Deals</a>
            <a href="#" class="hover:text-indigo-400 transition transform hover:scale-105">Contact</a>
        </nav>
        

        <!-- User Actions -->
        <div class="flex items-center space-x-6">
            <!-- Search Icon -->
            <button class="text-white hover:text-indigo-400 transition md:hidden">
                <i class="fas fa-search text-lg"></i>
            </button>

            <!-- Notifications -->
            <a href="#" class="relative text-white hover:text-red-500 transition">
                <i class="fas fa-bell text-lg"></i>
                <span class="absolute -top-2 -right-2 bg-red-500 text-xs text-white rounded-full px-2 py-0.5">5</span>
            </a>

            <!-- Wishlist -->
            <a href="#" class="text-white hover:text-red-500 transition">
                <i class="fas fa-heart text-lg"></i>
            </a>

            <!-- Cart -->
            <a href="#" class="relative text-white hover:text-indigo-400 transition">
                <i class="fas fa-shopping-cart text-lg"></i>
                <span class="absolute -top-2 -right-2 bg-red-500 text-xs text-white rounded-full px-2 py-0.5">3</span>
            </a>

            <!-- Profile Dropdown -->
            <div class="relative">
                <button class="text-white hover:text-indigo-400 flex items-center space-x-2">
                    <i class="fas fa-user-circle text-lg"></i>
                    <span class="hidden md:block">Account</span>
                </button>
                <!-- Dropdown Menu -->
                <div class="absolute right-0 mt-2 bg-white text-gray-800 rounded-lg shadow-lg w-40 py-2 hidden group-hover:block">
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-200">Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-200">Orders</a>
                    <a href="#" class="block px-4 py-2 text-sm hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Bar (visible on larger screens) -->
<div class="hidden md:block bg-gray-50 py-4 shadow-md">
    <div class="container mx-auto px-6 flex items-center space-x-4">
        <!-- Categories Dropdown -->
        <select class="bg-gray-100 text-gray-700 px-4 py-2 rounded-l-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500">
            <option value="">All Categories</option>
            <option value="electronics">Electronics</option>
            <option value="fashion">Fashion</option>
            <option value="home">Home & Kitchen</option>
            <option value="sports">Sports</option>
        </select>

        <!-- Search Input with Integrated Button -->
        <div class="relative w-full">
            <input type="text" class="w-full bg-gray-100 text-gray-700 px-4 py-2 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 pr-12"
                placeholder="Search for products...">
            <button class="absolute top-1/2 right-3 transform -translate-y-1/2 bg-indigo-600 text-white px-4 py-2 rounded-r-lg hover:bg-indigo-700 transition">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</div>

    
</header>
