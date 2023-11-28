<?php

namespace App\Http\Controllers;

use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function book(){
        $publishers = Publisher::all();
        return view('book', compact('publishers'));
    }
}
