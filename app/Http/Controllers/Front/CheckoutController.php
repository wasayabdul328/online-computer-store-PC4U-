<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;

use App\Order;
use App\OrderItems;
use Cart;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(){
        return view('front.checkout.index');
    }
    public function cod(){
        return view('front.checkout.cod');
    }
    public function codStore( Request $request ){
        //validate request
        
        
      
        $request->validate([
            'email'=>'email|required',
            'name'=>'required|min:2',
            'address'=>'required|min:10',
            'city'=>'required',
            'province'=>'required',
            'postal'=>'required',
            'phone'=>'required|numeric|min:11',
        ]);
        //insert into orders table
        $order=Order::create([
            'user_id'=>auth()->user()->id,
            'date' => Carbon::now(),
            'address'=>$request->address,
            'city'=>$request->city,
            'status'=>0,
            'province'=>$request->province,
            'postal'=>$request->postal,
            'phone_no'=>$request->phone,
            
        ]);
        
        //insert into order_items table
        foreach(Cart::getContent() as $item){

            OrderItems::create([
                'order_id'=>$order->id,
                'product_id'=>$item->model->id,
                'quantity'=>$item->quantity,
                'price'=>$item->price

            ]);

        }
        Cart::clear();
        return view('front.checkout.thanku');

    }
}
