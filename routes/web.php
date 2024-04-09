<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('books');
});

Route::resource('books', BooksController::class);

Route::get('filter', [BooksController::class, 'filterItems'])->name('filter');