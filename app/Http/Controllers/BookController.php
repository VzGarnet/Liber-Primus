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
        $authors = Author::take(2)->get();
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
        $books = Book::whereHas('genres', function ($query) use ($genre_id) {
            $query->whereIn('genre_id', $genre_id);
        })
        ->where('id', '!=', $id)
        ->get();
        return view('bookdetail', compact('clickedbooks', 'books', 'wishlist'));
    }

    public function wishlist(Request $request){
        $wishlist = Wishlist::where('user_id', '=', $request->user()->id);
    
        $books = Book::whereHas('wishlists', function ($query) use ($wishlist) {
            $query->whereIn('book_id', $wishlist->pluck('book_id'));
        })->get();
    
        return view('wishlist', compact('books'));
    }

    public function showbycat($identifier){
        $bookbycat = BookGenre::where('genre_id', $identifier)->pluck('book_id');

        $books = Book::findOrFail($bookbycat);
        $genres = Genre::all();
        $publishers = Publisher::all();

        return view('book', compact('bookbycat', 'books', 'genres', 'publishers'));
    }

    public function filterbycat(Request $request){
        $getid = $request->input('publisherid');

        $books = Book::where('publisher_id', $getid)->get();
        $genres = Genre::all();
        $publishers = Publisher::all();

        return view('book', compact('books', 'genres', 'publishers'));
    }


    //Search
    public function search(Request $request){
        $query = $request->input('query');

        $books = Book::where('title','like','%'.$query.'%')->get();
        $publishers = Publisher::all();
        return view('book',compact('books','publishers'));
    }


}
