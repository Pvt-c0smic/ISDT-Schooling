<?php

use App\Http\Controllers\Site\CheckoutController;

Route::get('/checkout', [
    CheckoutController::class,
    'index'
])->name('checkout');

Route::post('/checkout/verify', [
    CheckoutController::class,
    'verify'
])->name('checkout.verify');