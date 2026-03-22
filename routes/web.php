<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\UserController;
use App\Models\Report;

Route::get('/', function () {
    return view('index');
});

// dashboard
Route::get('/dashboard', [ReportController::class, 'index'])
    ->name('dashboard');

// user
Route::get('/users', [UserController::class, 'index'])
    ->name('users');

Route::resource('users', UserController::class);

// products
Route::get('/product', [ProductController::class, 'index'])
    ->name('product');

Route::resource('products', ProductController::class);

// product category
Route::get('/product-category', [ProductCategoryController::class, 'index'])
    ->name('categories');

Route::resource('categories', ProductCategoryController::class);