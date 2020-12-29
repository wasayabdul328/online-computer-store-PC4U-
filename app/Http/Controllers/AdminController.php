<?php

namespace App\Http\Controllers;

use App\AdminUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }
    public function getlogin(){
        return view('admin.login');
    }
    public function checkAdmin(Request $request){
        //validate
        $request->validate([
            'email'=>'Required|email',
            'password'=>'Required|min:8'
        ]);
        //log the user in
        $credentials=$request->only('email','password');
        if(! Auth::guard('admin')->attempt($credentials)){
            return back()->withErrors(
                ['message'=>'WRONG CREDENTIALS PLEASE TRY AGAIN']);
        }
        //session msg
        session()->flash('msg','You have been logged in');

       //redirect
       return redirect('admin/dashboard');
    }
    public function logout(){
        auth()->guard('admin')->logout();
        session()->flash('msg','you have been logged out');
        return redirect('admin/login');
    }
}
