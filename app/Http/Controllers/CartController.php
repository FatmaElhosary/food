<?php

namespace laravel5\Http\Controllers;
use laravel5\Cart;
use laravel5\CartItem;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

use laravel5\Http\Requests;
use laravel5\Http\Controllers\Controller;
use laravel5\size;

class CartController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function addItem ($productId){
        $cart = Cart::where('user_id',Auth::user()->id)->first();
        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }
        $cartItem  = new Cartitem();
        $cartItem->item_id=$productId;
        $cartItem->cart_id= $cart->id;
        $cartItem->save();

        return redirect('/cart');

    }

    public function showCart(){
        $cart = Cart::where('user_id',Auth::user()->id)->first();

        if(!$cart){
            $cart =  new Cart();
            $cart->user_id=Auth::user()->id;
            $cart->save();
        }

        $items = $cart->cartItems;

        $total=0;
        foreach($items as $item){

            @$total+=$item->product->price;
            @$name=$item->data->name;
        }
       
           
        return view('cart.view',['items'=>$items,'total'=>$total,'name'=>@$name]);
    }

    public function removeItem($id){

        CartItem::destroy($id);
        return redirect('/cart');
    }

}

