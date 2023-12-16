<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //
    public function cart($id){
        $trs = Transaction::all();
        $tr_user = Transaction::where($trs->user_id == $id);

        $total = 0;
        foreach($tr_user as $tr){
            $total += $tr->price * $tr->quantity;
        }

        return view('cart', compact($trs, $tr_user, $total));
    }

    public function checkout(){
        return view('checkout');
    }
}
