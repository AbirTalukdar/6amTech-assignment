<?php

namespace App\Models;

use App\User;
// use App\Models\Review;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public function reviews(){
    //     return $this->hasMany(Review::class);
    // }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
