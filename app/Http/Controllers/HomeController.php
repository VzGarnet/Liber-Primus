<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $books = Book::all();
        $best_sellers = Book::orderBy('rating', 'desc')->take(5)->get();
        $authors = Author::all();
        return view('home', compact('books', 'best_sellers', 'authors'));
    }
}
