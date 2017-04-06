<?php

namespace laravel5;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
     protected $fillable = [
         'name', 'description'
    ];
     public function size()
    {
        return $this->hasMany('laravel5\size');
    }
  
 public function user()
 {
     return $this->belongsTo('laravel5\user');
 }
}
