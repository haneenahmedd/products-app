<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', [ProductController::class, 'getProducts']);

Route::get('/getProducts', [ProductController::class, 'getProducts']);
Route::post('/addProduct', [ProductController::class, 'addProduct']);

Route::get('/viewForm', function () {
    return view('layouts.insertProduct');
});