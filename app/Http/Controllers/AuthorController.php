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
}
