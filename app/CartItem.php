<?php

namespace laravel5;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
     protected $fillable = [
        'cart_id', 'item_id',
    ];
    public function cart()
    {
        return $this->belongsTo('laravel5\Cart');
    }

    public function product()
{
    return $this->belongsTo('laravel5\size','item_id','items_id');
}
    public function data()
    {
        return $this->belongsTo('laravel5\item','item_id','id');
    }
}
