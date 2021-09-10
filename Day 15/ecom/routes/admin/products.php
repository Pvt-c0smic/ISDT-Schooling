<?php

use App\Http\Controllers\Admin\ProductsController;

Route::get('/products', [
    ProductsController::class,
    'index'
])->name('admin.products');

Route::get('/products/create', [
    ProductsController::class,
    'create'
])->name('admin.products.create');

Route::post('/products/create', [
    ProductsController::class,
    'create_save'
])->name('admin.products.create.save');

Route::get('/products/update/{id}', [
    ProductsController::class,
    'update'
])->name('admin.products.update');

Route::post('/products/update/{id}', [
    ProductsController::class,
    'update_save'
])->name('admin.products.update.save');


Route::get('/products/delete/{id}', [
    ProductsController::class,
    'delete'
])->name('admin.products.delete');