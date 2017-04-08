<?php

namespace laravel5\Http\Controllers;

use laravel5\size;
use Illuminate\Http\Request;

class sizeController extends Controller
{
    public function index(){
      $sizes=size::all();
     //$items =item::has('size')->get();
      return view('items.index',compact('sizes'));
    }
}
