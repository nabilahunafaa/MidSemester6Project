<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function index(){
        $categories = ProductCategory::paginate(10);

        return view('layouts.parts.product-category', compact('categories'));
    }
}
