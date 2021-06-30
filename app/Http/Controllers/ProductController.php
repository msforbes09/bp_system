<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Product listing
     *
     * @return View
     */
    public function index()
    {
        $products = Product::get();

        return view('product.index', ['products' => $products]);
    }
}
