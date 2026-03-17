<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        return view('layouts.products', compact('products'));
    }

    public function addProduct(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->status = $request->input('status');
        $product->save();

        return redirect('/getProducts');
    }
}