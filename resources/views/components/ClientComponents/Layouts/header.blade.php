<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-6 py-4 flex items-center justify-between">
        
        <!-- Logo -->
        <a href="#" class="flex items-center space-x-2">
            <img src="https://via.placeholder.com/40" alt="Logo" class="w-10 h-10">
            <span class="text-2xl font-bold text-gray-800">ShopLogo</span>
        </a>

        <!-- Search Bar -->
        <div class="hidden lg:flex items-center bg-gray-100 rounded-lg w-1/2">
            <select
                class="bg-transparent px-4 py-2 text-gray-600 focus:outline-none border-r border-gray-300">
                <option value="">All Categories</option>
                <option value="electronics">Electronics</option>
                <option value="fashion">Fashion</option>
                <option value="home">Home & Kitchen</option>
                <option value="sports">Sports</option>
                <option value="toys">Toys & Games</option>
            </select>
            <input type="text"
                class="w-full px-4 py-2 bg-transparent text-gray-600 focus:outline-none"
                placeholder="Search for products...">
            <button class="px-4 py-2 bg-indigo-600 text-white rounded-r-lg hover:bg-indigo-700">
                <i class="icon-search"></i>
            </button>
        </div>

        <!-- User Actions -->
        <div class="flex items-center space-x-6">
            <!-- Wishlist -->
            <a href="#" class="text-gray-600 hover:text-indigo-600 transition">
                <i class="icon-heart text-xl"></i>
            </a>
            
            <!-- Cart -->
            <a href="#" class="relative text-gray-600 hover:text-indigo-600 transition">
                <i class="icon-shopping-cart text-xl"></i>
                <span
                    class="absolute -top-2 -right-2 bg-red-500 text-white text-xs rounded-full px-2 py-0.5">3</span>
            </a>
            
            <!-- Profile -->
            <a href="#" class="text-gray-600 hover:text-indigo-600 transition">
                <i class="icon-user-circle text-xl"></i>
            </a>
        </div>
    </div>

    <!-- Navigation Menu -->
    <nav class="bg-gray-50 border-t border-gray-200">
        <div class="container mx-auto px-6">
            <ul class="flex items-center justify-between space-x-6 text-gray-600 font-medium">
                <li><a href="#" class="hover:text-indigo-600 transition">Home</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Shop</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Deals</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Categories</a></li>
                <li><a href="#" class="hover:text-indigo-600 transition">Contact</a></li>
            </ul>
        </div>
    </nav>
</header>
