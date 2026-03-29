<header class="w-full bg-white shadow flex justify-between items-center px-6 py-3">
    <!-- Title -->
    <div class="flex items-center gap-6">
        <h1 class="text-xl font-bold text-gray-800">Dashboard</h1>
        <!-- Search bar -->
        <div class="relative">
            <input 
                type="text" 
                placeholder="Search..." 
                class="border border-gray-300 rounded-full px-4 py-1 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 absolute right-2 top-1.5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
            </svg>
        </div>
    </div>

    <!-- User & actions -->
    <div class="flex items-center gap-4">
        <!-- Notifications -->
        <button class="relative p-2 rounded-full hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6 6 0 10-12 0v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
            </svg>
            <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full px-1">3</span>
        </button>

        <!-- User profile -->
        <div class="flex items-center gap-2 cursor-pointer">
            <span class="text-gray-700 font-medium">Hi, User</span>
            <img src="https://via.placeholder.com/40" class="rounded-full border border-gray-200">
        </div>
    </div>
</header>