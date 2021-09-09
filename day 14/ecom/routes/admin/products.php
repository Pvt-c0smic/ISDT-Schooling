<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;

Route::get('/products', [
    ProductsController::class,
    'index'
])->name('admin.products');


Route::get('/products/create', [
    ProductsController::class,
    'create'
])->name('admin.products.create');


Route::post('/products/store', [
    ProductsController::class,
    'store'
])->name('admin.products.store');
