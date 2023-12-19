<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionHeader;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{   
    public function addToCart(Request $request, $id){
        $user = $request->user()->id;
        $add = Transaction::where('user_id', $user)->where('book_id',$id)->first();
        
        if($add){
            Transaction::create(
                [
                    'user_id' => $user,
                    'book_id' => $id,
                ]
            );   
            TransactionHeader::create(
                [
                    'asddas',
                ]
            ); 
        }
        return redirect()->back();
    }

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

    public function success(){
        return view('transaction-success');
    }

    public function transactionhistory($id){
        $tr_user = TransactionHeader::where('user_id', $id)->get();
        $tr_headers = TransactionHeader::with('user')->get();

        return view('transactionhistory', compact('tr_user', 'tr_headers'));
    }

    public function processtransaction(Request $request){
        $user = $request->user()->id;
        $book_id = $request->book_id;
        $add = TransactionHeader::where('user_id', $user);

        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');

        return redirect()->route('success');
    }
}
