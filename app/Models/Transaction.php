<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'transaction_headers_id', 'book_id', 'quantity'
    ];

    public function transactionheaders() {
        return $this->belongsTo(TransactionHeader::class);
    }

    public function books() {
        return $this->belongsTo(Book::class, 'book_id');
    }
}
