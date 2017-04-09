<?php

namespace laravel5;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    protected $fillable = [
         'size', 'smallprice','mediumprice','largeprice','items_id'
    ];
    
    public function item()
    {
        return $this->belongsTo('laravel5\item','items_id','id');
    }
  public function user()
 {
     return $this->belongsTo('laravel5\user');
 }
 
}
