    <aside class="relative bg-sidebar h-screen w-64 hidden sm:block shadow-xl">
        <div class="p-6">
            <a href="index.html" class="text-white text-3xl font-semibold uppercase hover:text-gray-300">Admin</a>
            <button class="w-full bg-white cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
                <i class="fas fa-plus mr-3"></i> New Report
            </button>
        </div>
        <nav class="text-white text-base font-semibold pt-3">
            <x-sidebar-button type='dashboard'>
                <x-slot>
                    Dashboard
                </x-slot>
            </x-sidebar-button>
            <x-sidebar-button type='user'>
                <x-slot>
                    Users
                </x-slot>
            </x-sidebar-button>
            <x-sidebar-button type='product'>
                <x-slot>
                    Product
                </x-slot>
            </x-sidebar-button>
            <x-sidebar-button type='product-category'>
                <x-slot>
                    Product Category
                </x-slot>
            </x-sidebar-button>
        </nav>
    </aside>