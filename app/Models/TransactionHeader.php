<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionHeader extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'total_price'
    ];

    public function transactions(){
        return $this->hasMany(Transaction::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}