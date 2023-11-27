<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'thread_id', 'title', 'discussion'
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function threads() {
        return $this->belongsTo(Thread::class);
    }
}
