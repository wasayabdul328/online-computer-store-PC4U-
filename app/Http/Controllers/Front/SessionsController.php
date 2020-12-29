<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class SessionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    

    public function index(){
        return view('front.sessions.index');
    }
    public function make_account(){
        session()->flash('message','Before going in to Cash on delievery page first you need to Sign in.');
        return view('front.sessions.index');
    }
    public function Store(Request $request){
        //validate user
        $rules=[
            'email'=>'required|email',
            'password'=>'required'
        ];
        $request->validate($rules);
        //check if the user is available
        $data=request(['email','password']);
        if(! auth()->attempt($data)){
            return back()->withErrors([
                'message'=>'You entered wrong credentials'
            ]);
        }
        //redirect
        return redirect('/user/profile');
        
    }
    public function logout(){
        auth()->logout();//logut user
        session()->flash('msg','you have been logout Successfuly');//store msg
        return redirect('/user/login');//redirect
    }
}
