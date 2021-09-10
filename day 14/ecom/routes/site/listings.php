<?php

use App\Http\Controllers\Site\ListingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [
    ListingController::class,
    'index'
])->name('homepage');

Route::get('/add-to-cart/{id}', [
    ListingController::class,
    'add_to_cart'
])->name('add.to.cart');
