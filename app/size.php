<?php

namespace laravel5;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    protected $fillable = [
         'size', 'price','item_id'
    ];
    
    public function item()
    {
        return $this->belongsTo('laravel5\item');
    }
  public function user()
 {
     return $this->belongsTo('laravel5\user');
 }
 
}
