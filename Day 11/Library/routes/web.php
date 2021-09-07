<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
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
    BookController::class,
    'index'
])->name('books.home');

Route::get('/create', [
    BookController::class,
    'create'
])->name('book.create');

Route::post('/store', [
    BookController::class,
    'store'
])->name('book.store');

// Author
Route::get('/author', [
    AuthorController::class,
    'index'
])->name('author.home');

Route::get('/author/create', [
    AuthorController::class,
    'create'
])->name('author.create');

Route::post('/author/store', [
    AuthorController::class,
    'store'
])->name('author.store');

Route::get('/author/update/{id}', [
    AuthorController::class,
    'show'
])->name('author.show');

Route::post('/author/update/{id}', [
    AuthorController::class,
    'update'
])->name('author.update');

Route::get('/author/delete/{id}', [
    AuthorController::class,
    'delete'
])->name('author.delete');


// Category
Route::get('/category', [
    CategoryController::class,
    'index'
])->name('category.home');

Route::get('/category/create', [
    CategoryController::class,
    'create'
])->name('category.create');

Route::post('/category/store', [
    CategoryController::class,
    'store'
])->name('category.store');

Route::get('/category/update/{id}', [
    CategoryController::class,
    'show'
])->name('category.show');

Route::post('/category/update/{id}', [
    CategoryController::class,
    'update'
])->name('category.update');

Route::get('/category/delete/{id}', [
    CategoryController::class,
    'delete'
])->name('category.delete');
