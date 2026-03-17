@php
    $icon = '';
    $destination = '';

    if($type == 'dashboard'){
        $icon = 'fas fa-tachometer-alt mr-3';
        $destination = route('dashboard');

    } elseif ($type == 'user') {
        $icon = 'fas fa-users mr-3';
        $destination = route('user');

    } elseif ($type == 'product') {
        $icon = 'fas fa-box mr-3';
        $destination = route('product');

    } elseif ($type == 'product-category') {
        $icon = 'fas fa-list mr-3';
        $destination = route('product-category');

    }
@endphp

<a href="{{ $destination }}" class="flex items-center text-white opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
    <i class="{{ $icon }}"></i>
    {{ $slot }}
</a>