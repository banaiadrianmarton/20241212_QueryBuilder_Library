<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/books');
Route::get('/books/search', [BookController::class, 'search'])->name('books.search');
Route::post('/books/search', [BookController::class, 'processSearch'])->name('book.process.search');
Route::resource('books', BookController::class);
