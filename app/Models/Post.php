<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $fillable = [
        'content',
        'image',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function siiyaq()
    {
        return $this->belongsTo(Siiyaq::class);
    }

    public function coments()
    {
        return $this->hasMany(Coment::class);
    }
}
