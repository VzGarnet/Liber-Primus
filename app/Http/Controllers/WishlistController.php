<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function wishlist(){
        $wishlists = Wishlist::all();
        return view('wishlist', compact('whislists'));
    }
}
