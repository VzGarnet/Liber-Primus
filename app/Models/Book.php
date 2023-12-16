<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'author_id', 'isbn', 'synopsis', 'price', 'publisher_id', 'image', 'stock'
    ];

    // foreign key
    public function authors() {
        return $this->belongsTo(Author::class,'author_id');
    }

    public function publishers() {
        return $this->belongsTo(Publisher::class,'publisher_id');
    }

    // primary key
    public function wishlists() {
        return  $this->hasMany(Wishlist::class);
    }

    public function transactions() {
        return  $this->hasMany(Transaction::class);
    }

    // many to many
    public function genres() {
        return $this->belongsToMany(Genre::class, 'book_genres', 'book_id', 'genre_id');
    }
}
