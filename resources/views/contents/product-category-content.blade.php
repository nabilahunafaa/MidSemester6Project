<h1 class="text-3xl text-black pb-6">Product Categories</h1>

<div class="w-full mt-6">
    <div class="flex justify-between items-center pb-3">
        <p class="text-xl flex items-center">
            <i class="fas fa-tags mr-3"></i> All Categories
        </p>
        <a href="{{ route('product-categories.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            <i class="fas fa-plus mr-2"></i> Add Category
        </a>
    </div>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Category Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Slug</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Total Products</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($categories as $index => $category)
                <tr class="{{ $index % 2 === 1 ? 'bg-gray-200' : '' }}">
                    <td class="text-left py-3 px-4">{{ $index + 1 }}</td>
                    <td class="text-left py-3 px-4">{{ $category->name }}</td>
                    <td class="text-left py-3 px-4">{{ $category->slug }}</td>
                    <td class="text-left py-3 px-4">{{ $category->products_count ?? 0 }}</td>
                    <td class="text-left py-3 px-4 flex gap-2">
                        <a href="{{ route('product-categories.edit', $category->id) }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('product-categories.destroy', $category->id) }}" method="POST" onsubmit="return confirm('Hapus kategori ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center py-4 text-gray-500">Belum ada kategori.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $categories->links() }}
    </div>
</div>
