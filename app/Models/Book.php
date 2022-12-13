<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'writer',
        'user_id',
        'category',
        'type',
        'photo',
        'description',
        'price'
    ];
    protected $appends = array('photo_url');

    function user() {
        return $this->belongsTo(User::class);
    }

    function offers() {
        return $this->hasMany(Offer::class);
    }

    public function getPhotoUrlAttribute()
    {
        return $this->photo ? asset('storage/photos/'.$this->photo) : asset('/images/logo.png');  
    }


}
