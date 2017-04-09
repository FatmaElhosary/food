<?php
use App\Http\Controllers\Controller;
namespace laravel5\Http\Controllers;
use laravel5\item;
use laravel5\size;
use laravel5\User;
use Request;
use laravel5\Http\Requests\AddItemRequest;
use Auth;
//use AddRequest;
//use App\item;
class itemsController extends Controller
{
    public function index(){
     //$items=item::all();
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
    //AddItemRequest $rquest
    
     public function store(){
     //$input=Request::get('name');
      //$input=Request::all();
       //return $input;
      //return redirect('items'); 
         $insertArray = array('name' => Request::get('name'),'description'=>Request::get('description'));

         $saveResult = item::create($insertArray);

         $last_id = $saveResult->id;
        
         $insertArray = array('size' => Request::get('size'),'price'=> Request::get('price'),'items_id'=>$last_id);

         $insersize = size::create($insertArray);

         return redirect('items');
    }
}
