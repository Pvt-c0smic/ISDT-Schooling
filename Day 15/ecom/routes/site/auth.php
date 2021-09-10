<?php

use App\Http\Controllers\Site\AuthController;

Route::get('/login', [
    AuthController::class,
    'index'
])->name('login');

Route::get('/register', [
    AuthController::class,
    'register'
])->name('register');

Route::post('/register/submit', [
    AuthController::class,
    'register_submit'
])->name('register.submit');

Route::get('/logout', [
    AuthController::class,
    'logout'
])->name('logout');

Route::post('/login/verify', [
    AuthController::class,
    'login_verify'
])->name('login.verify');