<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchProductController extends Controller
{
    public function index(Request $request){
        $request->validate([
            'search'=>'required|min:2'
        ]);
        $item=$request->input('search');
        $products=DB::table('products')->where('product_name','like',"%$item%")->paginate(4);
        return view('front.search product.index',compact('products'));
    }
}
