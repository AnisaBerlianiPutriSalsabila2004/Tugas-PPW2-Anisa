<?php

use App\Http\Controllers\book_controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/buku', [book_controller::class, 'index']);
Route::get('/buku/create', [book_controller::class, 'create'])->name('buku.create');
Route::post('/buku', [book_controller::class, 'store'])->name('buku.store');

Route::post('/buku/delete/{id}', [book_controller::class, 'destroy'])->name('buku.destroy');


Route::get('/buku/edit/{id}', [book_controller::class, 'edit'])->name('buku.edit');
Route::post('/buku/edit/data/{id}', [book_controller::class, 'update'])->name('buku.update');

