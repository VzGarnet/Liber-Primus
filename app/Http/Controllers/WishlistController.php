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

    public function test(Request $request, $id){
      $user = $request->user()->id;
      $wishlist = Wishlist::where('user_id', $user)->where('book_id',$id)->first();
      
      if($wishlist) {
        $wishlist->delete(); 
    } 
    else{
        Wishlist::create(
            [
                'user_id' => $user,
                'book_id' => $id,
            ]
            );
    }
    return redirect()->back();
}
}
   
