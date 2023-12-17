<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ThreadController extends Controller
{
    public function home(){
        $threads = Thread::first();
        return view('home', compact('threads'));
    }

    public function forum(){
        $threads = Thread::all();
        $user = User::all();
        return view('forum', compact('threads', 'user'));
    }

    public function insertForum(Request $request){
        $user = Auth::user();
        $user_id = $user->id;
        Thread::create([
            'user_id' => $user_id,
            'title' => $request->title,
            'discussion'=> $request->desc,
        ]);

        return redirect()->back();
    }
}
