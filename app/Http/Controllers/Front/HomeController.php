<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\UserFeedbacks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function getHomePage(){
        $products=DB::table('products')->paginate(4);
        return view('front.home',compact('products'));

    }
    public function getGraphicCardPage(){
        $products=DB::table('products')->where('category','Graphic Card')->paginate(4);
        return view('front.graphic_card',compact('products'));

    }
    public function getSSDPage(){
        $products=DB::table('products')->where('category','SSD')->paginate(4);
        return view('front.ssd',compact('products'));

    }
    public function getMonitorPage(){
        $products=DB::table('products')->where('category','Monitor')->paginate(4);
        return view('front.monitor',compact('products'));

    }
    public function getCompletedBuildPage(){
        $products=DB::table('products')->where('category','Cpu')->paginate(4);
        return view('front.completedBuild',compact('products'));

    }
    public function getRam(){
        $products=DB::table('products')->where('category','Ram')->paginate(4);
        return view('front.ram',compact('products'));

    }
    public function gethdd(){
        $products=DB::table('products')->where('category','HDD')->paginate(4);
        return view('front.hdd',compact('products'));

    }
    public function getAboutPage(){
        return view('front.about');
    }
    public function getFeedbackPage(){
        return view('front.feedbacks');
    }
    public function getFaqPage(){
        return view('front.faq');
    }
    public function getPoliciesPage(){
        return view('front.policies');
    }
    public function feedbackStore(Request $request){
        $rules=[
            'name'=>'Required',
            'company_name'=>'Required',
            'email'=>'Required|email',
            'phone_no'=>'numeric|Required',
            'category'=>'Required',
            'subject'=>'Required',
            'comments'=>'Required|min:3'
        ];
        $request->validate($rules);

        UserFeedbacks::create([
            'name'=>$request->name,
            'company_name'=>$request->company_name,
            'email'=>$request->email,
            'phone_no'=>$request->phone_no,
            'subject'=>$request->subject,
            'category'=>$request->category,
            'comments'=>$request->comments
        ]);
        $request->session()->flash('msg','your comment has been send to the administrator');

        return redirect('/feedbacks and suggestions');
        
    }
}
