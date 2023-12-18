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

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/author', [AuthorController::class, 'author']);

Route::get('/bookall', [BookController::class, 'book'])->name('bookall');

Route::get('/forum', [ThreadController::class, 'forum']);
Route::post('/forum', [ThreadController::class, 'insertForum'])->name("insertForum");

Auth::routes();

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/bookdetail/{id}',[BookController::class,'detail'])->name('bookdetail');

Route::get('/authordetail/{id}',[AuthorController::class, 'authordetail'])->name('authordetail');

//wishlist
Route::get('/wishlist', [BookController::class, 'wishlist']);

Route::post('/bookdetail/{id}',[WishlistController::class, 'toggleWishlist'])->name('wish');

//Cart
Route::get('/cart/{id}', [TransactionController::class, 'shopping=cart'])->name('cart');

Route::get('/checkout', [TransactionController::class, 'checkout']);

//Filter
Route::get('/book/{identifier}', [BookController::class, 'showbycat'])->name('cat');

Route::get('/book', [BookController::class, 'filterbycat'])->name('filter');

//Search
Route::get('/books/search',[BookController::class,'search'])->name('books.search');

// success page
Route::get('/success', [TransactionController::class, 'success'])->name('success');

//Transaction History
Route::get('/TransactionHistory',function(){
    return view('TransactionHistory');
});