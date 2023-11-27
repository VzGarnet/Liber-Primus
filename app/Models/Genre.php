<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    public function books() {
        return $this->belongsToMany(Genre::class, 'book_genres', 'book_id', 'genre_id');
    }
}
