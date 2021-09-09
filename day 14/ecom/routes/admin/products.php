<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductsController;

Route::get('/products', [
    ProductsController::class,
    'index'
])->name('admin.products');
