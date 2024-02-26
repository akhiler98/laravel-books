<?php
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthorController;
use App\Http\Controllers\Admin\BookController;



Route::get('/admin/authors',[AuthorController::class,'index'])->name('authors.view');

Route::get('/admin/authors/create',[AuthorController::class,'create']);

Route::post('/admin/authors',[AuthorController::class,'store'])->name('authors.store');



Route::get('/admin/books',[BookController::class,'index'])->name('books.view');

Route::get('/admin/books/create',[BookController::class,'create'])->name('books.create');

Route::post('/admin/books',[BookController::class,'store'])->name('books.store');

Route::get('/admin/books/{book_id}',[BookController::class,'edit'])->name('books.edit');

Route::put('/admin/books/{book_id}',[BookController::class,'update'])->name('books.update');