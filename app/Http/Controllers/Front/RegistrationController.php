<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index(){
        return view('front.registration.index');
    }
    public function store(Request $request){
        //validate
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|min:8',
            'confirmPassword'=>'required|same:password'
        ]);
        //save the data
            $user=User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>bcrypt($request->password),
                'isBan'=>0
            ]);
        //log the user in
        auth()->login($user);

        //redirect
        return redirect('/user/profile');
    }   
}
