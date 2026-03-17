<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing')</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-50 text-gray-800">

    {{-- Navbar --}}
    <nav class="flex justify-between items-center px-8 py-4 bg-white shadow">
        <h1 class="font-bold text-lg">MyApp</h1>
        <div class="space-x-4">
            <a href="#features" class="hover:text-blue-500">Features</a>
            <a href="#about" class="hover:text-blue-500">About</a>
            <a href="#contact" class="hover:text-blue-500">Contact</a>
        </div>
    </nav>

    {{-- Content --}}
    @yield('content')

    {{-- Footer --}}
    <footer class="text-center py-6 bg-white mt-10 border-t">
        <p class="text-sm text-gray-500">© 2026 MyApp</p>
    </footer>

</body>
</html>