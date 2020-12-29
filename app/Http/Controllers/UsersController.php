<?php

namespace App\Http\Controllers;

use App\Order;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index(){
        $users=User::all();
        return view('admin.users.index',compact('users'));
    }
    public function show($id){
        $orders=Order::where('user_id',$id)->get();
        $users=User::where('id',$id)->get();
        return view('admin.users.details',compact('orders','users'));
    }
    public function Ban($id){
        //find the user
        $user=User::find($id);
        //update the status(ban)
        $user->update([
            'isBan'=>1
        ]);
        //session msg
        session()->flash('msg','User has been banned Successfully');
        //redirect the page
        return redirect('/admin/users');
    }
    public function UnBan($id){
        //find the user
        $user=User::find($id);
        //update the status( unban)
        $user->update([
            'isBan'=>0
        ]);
        //session msg
        session()->flash('msg','User has been Un banned Successfully');
        //redirect the page
        return redirect('/admin/users');
    }
}
