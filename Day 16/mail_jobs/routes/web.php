<?php

use App\Http\Controllers\MailController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    MailController::class,
    'index'
])->name('form');

Route::post('/process',[
    MailController::class,
    'process'
])->name('form.process');


Route::view('/mail', 'mail.newsletter');
