<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Product::with([
            'category',
        ])->paginate(10);

        return view('layouts.parts.product', compact('products'));
    }
}
