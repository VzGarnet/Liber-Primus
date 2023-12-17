<?php

namespace App\Http\Controllers;

use App\Models\Author;
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
        return view('authordetail', compact('author'));
    }
}
