@extends('front/layouts/master')
@section('Page')
Cart
@endsection
@section('content')
<div class="container">

<section id="aboutus">
      <div class="container">
        <div class="aboutheading">
         <h3>Shopping Cart</h3>
        </div>
        
      </div>
    </section>
    @if(Cart::getTotalQuantity()>0)
    <h4 class="mt-5">{{Cart::getTotalQuantity()}} items(s) in Shopping Cart</h4>
    
    @include('admin.layouts.message')

    <div class="cart-items">
        
        <div class="row">
            
            <div class="col-md-12">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Item Image</th>
                            <th>Name</th>
                            <th>action</th>
                            <th>quantity</th>
                            <th> Price</th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach(Cart::getContent() as $item)
                        <tr>
                            <td><img src="{{url('uploads') .'/'.$item->model->image}}" style="width: 5em"></td>
                            <td>
                                <strong>{{$item->name}}</strong><br> {{$item->model->description}}
                            </td>
                            
                            <td>
                                <Form method="post" action="{{route('cart.destroy',$item->id)}}">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="badge badge-danger ">Remove</button>
                                </Form>
                                
                                
                            
                               

                            </td>
                            
                            
                            <td>
                                <span class="badge badge-light">{{$item->quantity}}</span>
                            </td>
                            
                            
                            <td>{{$item->getPriceSum() .' '. 'Rs'}}</td>
                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>   
            <!-- Price Details -->
                <div class="col-md-6">
                        <div class="sub-total">
                             <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th colspan="2">Price Details</th>
                                    </tr>
                                </thead>
                                    <tr>
                                        <td>Subtotal </td>
                                        <td>{{Cart::getSubTotal() .' '. 'Rs'}} </td>
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
                <!-- Save for later  -->
                <div class="col-md-12">
                    <a href="{{url('/')}}" class="btn btn-outline-dark">Continue Shopping</a>
                    <a href="{{url('/checkout')}}" class="btn btn-outline-info">Proceed to checkout</a>
                    <a href="{{url('/cod')}}" class="btn btn-outline-success">Cash on delievery</a>
                <hr>

                </div>
@else
<hr>
<h4 class="mt-5">There is no item in the shopping cart</h4>
<a href="{{url('/')}}" class="btn btn-outline-dark">Continue Shopping</a>

@endif
                


            </div>
        </div>
@endsection