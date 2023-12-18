<?php

namespace App\Http\Controllers;

use App\Models\AddToCart;
use Illuminate\Http\Request;

class AddToCartController extends Controller
{
    public function addToCart(Request $request){
        $book_id = $request->book_id;
        $user = $request->user()->id;
        $add = AddToCart::where('user_id', $user)->where('book_id', $book_id)->first();
        
        if($add){
            $add->update([
                'quantity' => $request->quantity,
            ]);
        } else {
            AddToCart::create([
                'user_id' => $user,
                'book_id' => $book_id,
                'quantity' => $request->quantity,
            ]); 
        }
    
        return redirect()->back();
    }    
}
