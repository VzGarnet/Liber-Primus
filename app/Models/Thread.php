<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'discussion'
    ];

    public function users() {
        return $this->belongsTo(User::class, 'user_id');
    }
}
