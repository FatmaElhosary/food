<?php
use App\Http\Controllers\Controller;
namespace laravel5\Http\Controllers;
use laravel5\item;
use laravel5\User;
class itemsController extends Controller
{
    public function index(){
      $items=item::all(); 
      return view('items.index',compact('items'));
    }
}
