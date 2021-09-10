<?php

use App\Http\Controllers\Site\ListingsController;

Route::get('/', [
    ListingsController::class,
    'index'
])->name('homepage');

Route::get('/add-to-cart/{id}', [
    ListingsController::class,
    'add_to_cart'
])->name('add.to.cart');