<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    protected $fillable = [
        'book_id',
        'offered_for',
        'user_id'
    ];

    function book() {
        return $this->belongsTo(Book::class);
    }

    function offeredFor() {
        return $this->belongsTo(Book::class, 'offered_for');
    }

    function user() {
        return $this->belongsTo(User::class);
    }
}
