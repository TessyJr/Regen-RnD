<?php

use App\Http\Controllers\BookController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/create/book', [BookController::class, 'createBook'])->name('createBook');
Route::post('/store/book', [BookController::class, 'storeBook'])->name('storeBook');
Route::get('/read/book', [BookController::class, 'readbook'])->('readBook');
Route::get('/read/book/{id}', [BookController::class, 'readBookById'])->name('readBookById');
