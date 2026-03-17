<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('layouts/parts/dashboard');
})->name('dashboard');

Route::get('/user', function () {
    return view('layouts/parts/user');
})->name('user');

Route::get('/product', function () {
    return view('layouts/parts/product');
})->name('product');

Route::get('/product-category', function () {
    return view('layouts/parts/product-category');
})->name('product-category');