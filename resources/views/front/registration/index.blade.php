@extends('front.layouts.master')

@section('Page')
    Registration Page
@endsection

@section('content')
<section id="signup" class="mt-4">
        <div class="container">
            <div class="signup-content">
             <div class="row justify-content-md-center">
                 <!-- @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                 @endif -->
                 <div class="col-md-5 content-box">
                     <h3 class="pt-2 text-center">SIGN UP</h3>
                     <hr>
                     <form method="POST" action="{{url('/user/signup')}}" >
                     @csrf
                        <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Enter Full Name">
                                <span class="text-danger"> {{$errors->has('name')? $errors->first('name') : ''}}</span>
                                
                              </div>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                          <span class="text-danger"> {{$errors->has('email')? $errors->first('email') : ''}}</span>
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter Password">
                          <span class="text-danger"> {{$errors->has('password')? $errors->first('password') : ''}}</span>
                        </div>
                        <div class="form-group">
                                <label> Confirm Password</label>
                                <input type="password" class="form-control" name="confirmPassword" placeholder="Enter Password Again">
                                <span class="text-danger"> {{$errors->has('confirmPassword')? $errors->first('confirmPassword') : ''}}</span>
                              </div>
                        
                        <button type="submit" class="btn btn-primary form-control">Submit</button>
                        <p class="mt-3">Already have an account <a href="{{url('/user/login')}}" style="color: blue;">click here</a> to Login</p>
                      </form>
                 </div>
             </div>
            </div>
         </div>
    </section>
@endsection