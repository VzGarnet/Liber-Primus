<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\ThreadController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\WishlistController;
use App\Models\Transaction;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', [AuthorController::class, 'home']);
Route::get('/', [BookController::class, 'home']);
// Route::get('/', [ThreadController::class, 'home']);
// Route::get('/', [GenreController::class, 'home']);

Route::get('/author', [AuthorController::class, 'author']);

Route::get('/book', [BookController::class, 'book']);

Route::get('/forum', [ThreadController::class, 'forum']);
// Route::get('/forum', [PostController::class, 'forum']);

Auth::routes();

Route::get('/home', [BookController::class, 'home']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/bookdetail/{id}',[BookController::class,'detail'])->name('bookdetail');

Route::get('/authordetail/{id}',[AuthorController::class, 'authordetail'])->name('authordetail');

//wishlist
Route::get('/wishlist', [BookController::class, 'wishlist']);

Route::post('/bookdetail/{id}',[WishlistController::class, 'toggleWishlist'])->name('wish');

//Cart
Route::get('/cart/{id}', [TransactionController::class, 'shopping=cart'])->name('cart');

Route::get('/checkout', [TransactionController::class, 'checkout']);