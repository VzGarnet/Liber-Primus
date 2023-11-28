<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;

class ThreadController extends Controller
{
    public function home(){
        $threads = Thread::first();
        return view('home', compact('threads'));
    }

    public function forum(){
        $threads = Thread::all();
        return view('forum', compact('threads'));
    }
}
