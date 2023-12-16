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

    public function headers(){
        return $this->hasMany(TransactionHeader::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
