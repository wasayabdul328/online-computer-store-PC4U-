<?php

namespace App\Http\Controllers;

use App\Order;
use App\Product;
use App\Supplier;
use App\User;
use App\UserFeedbacks;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function getDashboard(){
        $product=new Product();
        $order=new Order();
        $user=new User();
        $feedback= new UserFeedbacks();
        $supplier=new Supplier();
        return view("admin.dashboard",compact('product','order','user','feedback','supplier'));
    }
}
