<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
use App\Product;
use Darryldecode\Cart\Cart as CartCart;

class CartController extends Controller
{
    public function index(){
        return view('front.cart.index');
    }
    public function store(Request $request){
        Cart::add(array(
            'id' => $request->id, // inique row ID
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => 1,
            'attributes' => array()
        ))->associate('App\Product');
        return redirect()->back()->with('msg','your item has been added to the cart');
    }
    public function destroy($id){
        Cart::remove($id);
        return redirect()->back()->with('msg','item removed from cart successfully');
    }
    // public function savelater($id){
    //     $item=Cart::get($id);
    //     Cart::remove($id);
    //     return redirect()->back()->with('msg','ITEM HAVE BEEN SAVE FOR LATER');
    // }
}
