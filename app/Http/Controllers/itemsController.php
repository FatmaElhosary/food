<?php
use App\Http\Controllers\Controller;
namespace laravel5\Http\Controllers;
use laravel5\item;
use laravel5\size;
use laravel5\User;
use Request;
use laravel5\Http\Requests\AddItemRequest;
//use Illuminate\Contracts\Auth\Guard;

use Auth;
//use AddRequest;
//use App\item;
class itemsController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
    
    
    public function index(){
     //$items=item::all();
      $items = item::with('size')->latest()->get();
    //var_dump($items); die;
     //return $items;
     //$items =item::has('size')->get();
      return view('items.index',compact('items'));
    }
    
    public function create(){
  //if(Auth::user()->role=='admin')
        //return redirect('login');
  if(Auth::guest()) {
      return redirect('items');
  } 
  if(Auth::user()->role=='admin')
   //$this->middleware('auth');
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
        
         $insertArray = array('size' => Request::get('size'),'price'=> Request::get('price'),'items_id'=>$last_id);

         $insersize = size::create($insertArray);

         return redirect('items');
    }
    
    
     public function AddToCart(){
     //$input=Request::all();
     //var_dump($input); die;
         
    $insertArray = array('user_id' => Request::get('user_id'),'name'=> Request::get('name'),'size'=> Request::get('size'),'amount'=> Request::get('amount'));
     //return $insertArray['user_id']; 
    //return redirect('items',compact('$insertArray'));
    //return redirect()->back()->with([$insertArray]);
//    foreach ($insertArray as $insertArray)
//    {
//        
//    }
    return $insertArray;
    }
    
    
}
