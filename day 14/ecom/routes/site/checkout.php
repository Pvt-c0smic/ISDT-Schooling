<?php

use App\Http\Controllers\Site\CheckoutController;
use Illuminate\Support\Facades\Route;

Route::get('/checkout', [
    CheckoutController::class,
    'index'
])->name('checkout');
