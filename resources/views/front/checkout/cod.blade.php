@extends('front.layouts.master')

@section('Page')
Checkout
@endsection
@section('content')
<!-- Page Content -->
<section id="aboutus">
<div class="container">

<div class="aboutheading">
          <h3>Cash On Delievery</h3>
        </div>
  @if(Cart::getContent()->count() < 1)
    <H1>First add product in to the cart</H1>
    <a href="{{url('/')}}" class="btn btn-outline-dark">Continue Shopping</a>
  @else

        <div class="row"> 

        <div class="col-md-7">  
            <h4>Billing Details</h4>

               <form method="post" action="{{ url('/cod')}}">
               @csrf
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="email">Email</label>
                      <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                      <span class="text-danger"> {{$errors->has('email')? $errors->first('email') : ''}}</span>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" name="name" placeholder="Full name">
                      <span class="text-danger"> {{$errors->has('name')? $errors->first('name') : ''}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St">
                    <span class="text-danger"> {{$errors->has('address')? $errors->first('address') : ''}}</span>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-5">
                      <label for="city">City</label>
                      <input type="text" class="form-control" id="city" name="city" placeholder="City">
                      <span class="text-danger"> {{$errors->has('city')? $errors->first('city') : ''}}</span>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="provance">Province</label>
                        <input type="text" class="form-control" id="provance" name="province" placeholder="province">
                        <span class="text-danger"> {{$errors->has('province')? $errors->first('province') : ''}}</span>
                    </div>
                    <div class="form-group col-md-3">
                      <label for="postal">Postal</label>
                      <input type="text" class="form-control" id="postal" name="postal" placeholder="Postal">
                      <span class="text-danger"> {{$errors->has('postal')? $errors->first('postal') : ''}}</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone">
                    <span class="text-danger"> {{$errors->has('phone')? $errors->first('phone') : ''}}</span>
                  </div>
                  <hr>
                  
                  
                  <button type="submit" class="btn btn-outline-info col-md-12">Complete Order</button>
                </form>

            </div>

            <div class="col-md-5">
                
            <h4>Your Order</h4>
                
                <table class="table your-order-table">
                    <tr>
                        <th>Image</th>
                        <th>Details</th>
                        <th>Qty</th>
                    </tr>
                    @foreach(Cart::getContent() as $item)
                    <tr>
                        <td><img src="{{url('/uploads') .'/'. $item->model->image}}" alt="" style="width: 4em"></td>
                        <td>
                            <strong>{{$item->model->product_name}}</strong><br>
                            {{$item->model->description}} <br> 
                            <span class="text-dark">$355.00</span>
                        </td>
                        <td>
                            <span class="badge badge-light">{{$item->quantity}}</span>
                        </td>
                    </tr>
                    @endforeach
                </table>

                <hr>
                <table class="table your-order-table table-bordered">
                    <tr>
                        <th colspan="2">Price Details</th>
                    </tr>
                    <tr>
                        <td>Subtotal</td>
                        <td>{{Cart::getSubTotal() .' '. 'Rs'}}</td>
                    </tr>
                    <tr>
                        <td>Tax</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <th>Total</th>
                        <th>{{Cart::getTotal() .' '. 'Rs'}}</th>
                    </tr>
                    
                </table>

            </div>
        </div>
  @endif
</div>
<!-- /.container -->
</section>
@endsection