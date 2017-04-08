<?php
use App\Http\Controllers\Controller;
namespace laravel5\Http\Controllers;
use laravel5\item;
use laravel5\size;
use laravel5\User;
use Request;
use Auth;
//use AddRequest;
//use App\item;
class itemsController extends Controller
{
    public function index(){
     // $items=item::all();
      $items = item::with('size')->get();
    //var_dump($items); die;
     //return $items;
     //$items =item::has('size')->get();
      return view('items.index',compact('items'));
    }
    
    public function create(){
if(Auth::user()->role == 'admin')
      return view('items.create');

    }
     public function store(){
       //$input=Request::get('name');
      $input=Request::all();
      //$item->save();

      //$item->size()->save($size);

      //$item->size()->save(new size($input));
       return $input;
//     $item->name=Request::get('name');
//     $item->description=Request::get('description');
//     $item->user_id=Request::get('user_id');
     //$size->size=Request::get('size');
     //$size->price=Request::get('price');
      //item::create($input);
      //return $input;
//         $item = new item();
//         $item->user_id = Request::get('user_id');
//        $item->name = Request::get('name');
//        $item->description = Request::get('description');
//      
//        $item->size = new size();
//        $item->size->size = Request::get('size');
//        $item->size->price = Request::get('price');
//        $item->push();
//        return "item Saved";

      //return redirect('items'); 
    }
}
