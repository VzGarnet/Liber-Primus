<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\BookGenre;
use App\Models\Genre;
use App\Models\Publisher;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home(){
        $books = Book::all();
        $best_sellers = Book::orderBy('rating', 'desc')->take(5)->get();
        $authors = Author::all();
        return view('home', compact('books', 'best_sellers', 'authors'));
    }

    public function book(){
        $books = Book::all();
        $genres = Genre::all();
        $publishers = Publisher::all();
        return view('book', compact('books', 'genres', 'publishers'));
    }
    
    public function detail($id){
        $wishlist = Wishlist::all();
        $clickedbooks = Book::findOrFail($id);
        $genre_id = BookGenre::where('book_id', '=', $id)->pluck('genre_id');
        // $same_genres = BookGenre::where('genre_id', '=', $genre_id)->pluck('book_id');
        $books = Book::whereHas('genres', function ($query) use ($genre_id) {
            $query->whereIn('genre_id', $genre_id);
        })
        ->where('id', '!=', $id)
        ->get();
        return view('bookdetail', compact('clickedbooks', 'books', 'wishlist'));
    }
}
