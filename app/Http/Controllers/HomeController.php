<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Thread;
use Illuminate\Http\Request;

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
        $books = Book::take(10)->get();
        $best_sellers = Book::orderBy('rating', 'desc')->take(5)->get();
        $authors = Author::orderBy('name', 'asc')->take(2)->get();
        $threads = Thread::orderBy('created_at', 'desc')->take(3)->get();
        return view('home', compact('books', 'best_sellers', 'authors', 'threads'));
    }
}
