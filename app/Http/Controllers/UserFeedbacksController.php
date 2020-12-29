<?php

namespace App\Http\Controllers;

use App\UserFeedbacks;
use Illuminate\Http\Request;

class UserFeedbacksController extends Controller
{
    public function index(){
        $comments=UserFeedbacks::all();
        return view('admin.feedback.index',compact('comments'));
    }
}
