<?php

namespace App\Http\Controllers;

use App\Models\Product;

class DataProductController extends Controller
{
    public function index()
    {
        return view('product', [
            "title" => "product",
            "active" => "product",
            'products' => Product::all()
        ]);
    }
}
