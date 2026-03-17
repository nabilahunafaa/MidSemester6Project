<h1 class="text-3xl text-black pb-6">Products</h1>

<div class="w-full mt-6">
    <div class="flex justify-between items-center pb-3">
        <p class="text-xl flex items-center">
            <i class="fas fa-box mr-3"></i> All Products
        </p>
        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            <i class="fas fa-plus mr-2"></i> Add Product
        </a>
    </div>

    <div class="bg-white overflow-auto">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Product Name</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Category</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Price</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Stock</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($products as $index => $product)
                <tr class="{{ $index % 2 === 1 ? 'bg-gray-200' : '' }}">
                    <td class="text-left py-3 px-4">{{ $index + 1 }}</td>
                    <td class="text-left py-3 px-4">{{ $product->name }}</td>
                    <td class="text-left py-3 px-4">{{ $product->category->name ?? '-' }}</td>
                    <td class="text-left py-3 px-4">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td class="text-left py-3 px-4">{{ $product->stock }}</td>
                    <td class="text-left py-3 px-4 flex gap-2">
                        <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Hapus produk ini?')">
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
                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada produk.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
