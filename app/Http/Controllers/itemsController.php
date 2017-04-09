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
  if(Auth::user()->role=='admin')
  return view('items.create');

    }
    //AddItemRequest $rquest
    
     public function store(AddItemRequest $insertArray){
     //$input=Request::get('name');
      //$input=Request::all();
       //return $input; die;
      //return redirect('items'); 
      // $user = Auth::user();
         $insertArray = array('user_id' =>Request::get('user_id') ,'name' => Request::get('name'),'description'=>Request::get('description'));
        //var_dump($userId)); 
        
         $saveResult = item::create($insertArray);

         $last_id = $saveResult->id;
        
         $insertArray = array('smallprice' => Request::get('smallprice'),'mediumprice'=> Request::get('mediumprice'),'largeprice'=> Request::get('largeprice'),'items_id'=>$last_id);

         $insersize = size::create($insertArray);

         return redirect('items');
    }
}
