@extends('front.layouts.master')
@section('Page')
    Sign In
@endsection

@section('content')
<section id="login" class="mt-4">
        <div class="container">
            <div class="login-content">
                @include('admin.layouts.message')

                @if(session()->has('message'))

                    <div class="alert alert-warning">
                         {{ session()->get('message')}}
                    </div>


                @endif
             <div class="row justify-content-md-center">
                 <div class="col-md-5 content-box">
                     <h3 class="pt-2 text-center">LOG IN</h3>
                     <hr>
                     <form method="POST" action="{{url('/user/login')}}" >
                     @if($errors->has('message'))
                        <div class="alert alert-danger">
                            {{$errors->first('message')}}
                        </div>
                     @endif

                        <div class="form-group">
                            @csrf
                          <label>Email address</label>
                          <input type="email" class="form-control" name="email" placeholder="Enter Email Address">
                          <span class="text-danger"> {{$errors->has('email')? $errors->first('email') : ''}}</span>
                          
                        </div>
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="password" placeholder="Enter Password">
                          <span class="text-danger"> {{$errors->has('password')? $errors->first('password') : ''}}</span>
                        </div>
                        

                        <button type="submit" class="btn btn-primary form-control">LOGIN</button>
                        <p class="mt-3">Don't have an account <a href="{{url('/user/signup')}}" style="color: blue;">click here</a> to sign up</p>
                      </form>
                 </div>
             </div>
            </div>
         </div>
    </section>
@endsection