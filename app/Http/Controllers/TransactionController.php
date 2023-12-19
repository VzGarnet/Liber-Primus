<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\TransactionHeader;
use App\Models\AddToCart;
use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class TransactionController extends Controller
{   
    public function cart($id){
        $trs = Transaction::all();
        $tr_user = Transaction::where($trs->user_id == $id);

        $total = 0;
        foreach($tr_user as $tr){
            $total += $tr->price * $tr->quantity;
        }

        return view('cart', compact($trs, $tr_user, $total));
    }

    public function checkout(Request $request){
        $total_price = $request->input('total');
        return view('checkout', compact('total_price'));
    }

    public function success(){
        return view('transaction-success');
    }

    public function transactionhistory(Request $request){
        $transaction_id = TransactionHeader::where('user_id', '=', $request->user()->id);
        $transaction = Transaction::all();
        $books = Book::whereHas('transactions', function ($query) use ($transaction) {
            $query->whereIn('book_id', $transaction->pluck('book_id'));
        })->get();

        return view('transactionhistory', compact('transaction'));
    }

    public function processtransaction(Request $request){
        $user = $request->user()->id;
        $book_id = $request->book_id;
        $add = TransactionHeader::where('user_id', $user);

        $name = $request->input('name');
        $address = $request->input('address');
        $phone = $request->input('phone');

        $total_price = $request->input('total');

        TransactionHeader::create([
            'user_id' => $user,
            'total_price' => $total_price,
        ]);

        $allitem = AddToCart::all();

        $transid = TransactionHeader::latest('updated_at')->first();

        foreach($allitem as $item)

        Transaction::create([
            'transaction_headers_id' => $transid->id,
            'book_id' => $item->book_id,
            'quantity' => $item->quantity,
        ]);


        AddToCart::truncate();

        return redirect()->route('success');
    }
}
