@extends('layouts.landing-page')

@section('title', 'Home')

@section('content')

{{-- Hero --}}
<section class="text-center py-20 bg-gradient-to-r from-blue-500 to-indigo-600 text-white">
    <h1 class="text-4xl font-bold mb-4">Welcome to MyApp</h1>
    <p class="mb-6">Simple solution for managing your business</p>
    <a href="{{ route('dashboard') }}" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold">
        Get Started
    </a>
</section>

{{-- Features --}}
<section id="features" class="py-16 px-8">
    <h2 class="text-2xl font-bold text-center mb-10">Features</h2>

    <div class="grid md:grid-cols-3 gap-6">
        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold mb-2">Dashboard</h3>
            <p>Monitor your data in one place.</p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold mb-2">User Management</h3>
            <p>Manage users easily.</p>
        </div>

        <div class="bg-white p-6 rounded shadow">
            <h3 class="font-semibold mb-2">Reports</h3>
            <p>Generate simple reports.</p>
        </div>
    </div>
</section>

{{-- About --}}
<section id="about" class="py-16 px-8 bg-gray-100 text-center">
    <h2 class="text-2xl font-bold mb-4">About</h2>
    <p class="max-w-xl mx-auto">
        This application helps you manage your business efficiently with a simple interface.
    </p>
</section>

{{-- Contact --}}
<section id="contact" class="py-16 px-8 text-center">
    <h2 class="text-2xl font-bold mb-4">Contact</h2>
    <p>Email: support@myapp.com</p>
</section>

@endsection