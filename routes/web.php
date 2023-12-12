<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/bookdetail', function () {
    return view('bookdetail');
});

Route::get('/', [AuthorController::class, 'home']);
Route::get('/', [BookController::class, 'home']);
Route::get('/', [ThreadController::class, 'home']);
Route::get('/', [GenreController::class, 'home']);

Route::get('/author', [AuthorController::class, 'author']);

Route::get('/book', [PublisherController::class, 'book']);

Route::get('/forum', [ThreadController::class, 'forum']);
Route::get('/forum', [PostController::class, 'forum']);

Route::get('/wishlist', [WishlistController::class, 'wishlist']);