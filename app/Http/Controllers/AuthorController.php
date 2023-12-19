<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function home(){
        $authors = Author::all();
        return view('home', compact('authors'));
    }

    public function author(){
        $authors = Author::all();
        return view('author', compact('authors'));
    }

    public function authordetail($id){
        $author = Author::findOrFail($id);
        $books = Book::where('author_id', '=', $id)->get();
        return view('authordetail', compact('author', 'books'));
    }
}
