<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders=Order::all();
        return view('admin.orders.index',compact('orders'));
    }
    public function confirm($id){
        //find the order
        $order=Order::find($id);
        //updarte the order
        $order->update([
            'status'=>1
        ]);
        //session msg
        session()->flash('msg','order has been confirmed');
        //redirect the page
        return redirect('/admin/orders');
    }
    public function pending($id){
        //find the order
        $order=Order::find($id);
        //updarte the order
        $order->update([
            'status'=>0
        ]);
        //session msg
        session()->flash('msg','order has been into pending');
        //redirect the page
        return redirect('/admin/orders');
    }
    public function show($id){
        $order=Order::find($id);
        return view('admin.orders.details',compact('order'));
    }
}
