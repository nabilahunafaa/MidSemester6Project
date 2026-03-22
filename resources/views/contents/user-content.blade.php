<h1 class="text-3xl text-black pb-6 m-4">Users</h1>

<div class="w-full mt-6 m-4">
    <div class="flex justify-between items-center pb-3">
        <p class="text-xl flex items-center">
            <i class="fas fa-users mr-3"></i> All Users
        </p>
        {{-- <a href="{{ route('users.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            <i class="fas fa-plus mr-2"></i> Add User
        </a> --}}
    </div>

    <div class="bg-white w-full overflow-x-auto ">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">#</th>
                    <th class=" text-left py-3 px-4 uppercase font-semibold text-sm">First Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Last Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Phone</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Role</th>
                    {{-- <th class="w-1/7 text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th> --}}
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($users as $index => $user)
                <tr class="{{ $index % 2 === 1 ? 'bg-gray-200' : '' }}">
                    <td class="text-left py-3 px-4">{{ $index + 1 }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $user->first_name }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $user->last_name }}</td>
                    <td class="text-left py-3 px-4">
                        <a class="hover:text-blue-500" href="tel:{{ $user->phone_number }}">{{ $user->phone_number }}</a>
                    </td>
                    <td class="text-left py-3 px-4">
                        <a class="hover:text-blue-500" href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </td>
                    <td class="text-left py-3 px-4">
                        <span class="px-2 py-1 rounded text-xs font-semibold
                            {{ $user->role === 'admin' ? 'bg-blue-100 text-blue-700' : 'bg-gray-100 text-gray-700' }}">
                            {{ ucfirst($user->role ?? 'user') }}
                        </span>
                    </td>
                    {{-- <td class="text-left py-3 px-4 flex gap-2">
                        <a href="{{ route('users.edit', $user->id) }}" class="text-blue-500 hover:text-blue-700">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Hapus user ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500 hover:text-red-700">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </td> --}}
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center py-4 text-gray-500">Belum ada user.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4 flex justify-center">
        {{ $users->links() }}
    </div>
</div>
