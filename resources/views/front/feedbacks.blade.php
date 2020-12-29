@extends('front.layouts.master')
@section('Page')
    Feedbacks & Suggestions
@endsection
@section('content')
<section id="Feedbacks">
      <div class="container">
      @if(session()->has('msg'))

      <div class="alert alert-success mt-3">
          {{ session()->get('msg')}}
      </div>


      @endif
        <div class="feedbacks-heading">
            <h3>Contact Us</h3>    
        </div>
        <p>Use the following contact details to contact us or fill up the below contact form. We'll respond to your query as soon as possible.</p>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="card-header">
                Contact Details
              </div>
              <div class="card-body">
                <p class="card-text">PC4U</p>
                <p class="card-text">Address : Mustafabad,Dharampura,Lahore</p>
                <p class="card-text">Phone : (92) 323 4003560</p>
                <p class="card-text">Email : wasayabdul328@gmail.com</p>
                <p class="card-text">Website : www.PC4U.com.pk</p>
              </div>
            </div>
          </div>
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                Contact Form
              </div>
              
              <div class="card-body">
                <form method="POST" action="{{url('/feedbacks and suggestions')}}">
                @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label >Full Name</label>
                      <input type="text" class="form-control" id="inputEmail4" placeholder="Full Name" name="name">
                      <span class="text-danger"> {{$errors->has('name')? $errors->first('name') : ''}}</span>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4">Company Name</label>
                      <input type="text" class="form-control" id="inputPassword4" placeholder="Company" name="company_name">
                      <span class="text-danger"> {{$errors->has('company_name')? $errors->first('company_name') : ''}}</span>
                    </div>
                  </div>
                  <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="inputAddress">Email Address</label>
                    <input type="email" class="form-control" id="inputAddress" placeholder="Email Address" name="email">
                    <span class="text-danger"> {{$errors->has('email')? $errors->first('email') : ''}}</span>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="Phone">Phone # / Mobile #</label>
                    <input type="text" class="form-control" id="Phone" placeholder=" Enter Phone # / Mobile #" name="phone_no">
                    <span class="text-danger"> {{$errors->has('phone_no')? $errors->first('phone_no') : ''}}</span>
                  </div>
                  </div>
                  <div class="form-group">
                    <label>subject</label>
                    <input type="text" class="form-control" placeholder=" Enter Subject for your comment" name="subject">
                    <span class="text-danger"> {{$errors->has('subject')? $errors->first('subject') : ''}}</span>
                  </div>
                  
                  
                  <div class="form-group">
                                            
                                            <label>Subject Category</label>
                                            <select class="form-control border-input" name="category" >
                                            
                                            <option value="Services">Services</option>
                                                <option value="Website">Website</option>
                                                <option value="Order">Order</option>
                                                <option value="Products">Products</option>
                                                <option value="Other">Other</option>
                                                
                                            </select>
                                            <span class="text-danger"> {{$errors->has('category')? $errors->first('category') : ''}}</span>
                                           
                                        </div>
                
              </div>

                  
                  
                  <div class="form-group col-md-12">
                    <label for="inputcomment">Comments</label>
                    <textarea class="form-control" id="inputcomment" cols="30" rows="8" name="comments"></textarea>
                    <span class="text-danger"> {{$errors->has('comments')? $errors->first('comments') : ''}}</span>
                  </div>
                </div>
                  
                  <button type="submit" class="btn btn-primary form-control">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    </section>

@endsection