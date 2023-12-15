<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Publisher;
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
        $books = Book::findOrFail($id);
        return view('bookdetail',compact('books'));
    }
}
