<?php

namespace laravel5;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
     protected $fillable = [
        'user_id', 
    ];
   public function user()
    {
        return $this->belongsTo('laravel5\User');
    }

    public function cartItems()
    {
        return $this->hasMany('laravel5\CartItem');
    }
}
