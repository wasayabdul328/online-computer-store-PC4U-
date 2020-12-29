@extends('front/layouts/master')
@section('Page')
    user order details
@endsection
@section('content')
<section id="aboutus">
    <div class="container">
     <div class="aboutheading">
        <h3>{{auth()->user()->name . " Order Details"}}</h3>
     </div>
     <div class="row">
   

                    <div class="col-md-12">
                        
                                
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Address</th>
                                        
                                        <th>Price</th>
                                        <th>Status</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>
                                            {{$order->id}}
                                        </td>
                                        <td>
                                            {{$order->date}}
                                        </td>
                                        <td>
                                            {{$order->OrderItems[0]->quantity}}
                                        </td>
                                        <td>
                                            {{$order->address}}
                                        </td>
                                        <td>
                                            {{$order->OrderItems[0]->price}}
                                        </td>
                                        <td>
                                        @if($order->status)
                                                <span class="badge badge-success">Confirmed</span>
                                            @else
                                                <span class="badge badge-warning">Pending</span>
                                            @endif
                                        </td>
                                       
                                    </tr>

                                   

                                    </tbody>
                                </table>


                            
                    </div>


                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                    <div class="aboutheading">
        <h3>{{auth()->user()->name . " Details"}}</h3>
     </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{$order->user->id}}</td>
                                    </tr>
                                    <tr>
                                        <th>Name</th>
                                        <td>{{$order->user->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$order->user->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Registered at</th>
                                        <td>{{$order->user->created_at->diffForHumans()}}</td>
                                    </tr>
                                        
                                    
                                    </thead>
                                    
                                </table>


                            
                    </div>
                    <div class="col-md-12">
                        
                            <div class="header">
                            <div class="aboutheading">
        <h3>Product Details</h3>
     </div>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                   <tr>
                                       <th>Order ID</th>
                                       <th>Product Name</th>
                                       <th>Price</th>
                                       <th>Quantity</th>
                                       <th>Image</th>
                                   </tr>
                                   <tr>
                                       <td>
                                           {{$order->id}}
                                       </td>
                                       <td>
                                           @foreach($order->products as $product)
                                                <table class="table">
                                                    <tr>
                                                        <td>
                                                            {{$product->product_name}}
                                                        </td>
                                                    </tr>
                                                </table>
                                           @endforeach
                                       </td>
                                       <td>
                                           @foreach($order->OrderItems as $item)
                                                <table class="table">
                                                    <tr>
                                                        <td>
                                                            {{$item->price}}
                                                        </td>
                                                    </tr>
                                                </table>
                                           @endforeach
                                       </td>
                                       <td>
                                           @foreach($order->OrderItems as $item)
                                                <table class="table">
                                                    <tr>
                                                        <td>
                                                            {{$item->quantity}}
                                                        </td>
                                                    </tr>
                                                </table>
                                           @endforeach
                                       </td>
                                       <td>
                                           @foreach($order->products as $item)
                                                <table class="table">
                                                    <tr>
                                                        <td>
                                                            <a href="{{url('uploads').'/'. $item->image}}" target="_blank" rel="noopener noreferrer">
                                                            <img src="{{url('uploads').'/'. $item->image}}" alt="" style="width: 2em;">
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </table>
                                           @endforeach
                                       </td>
                                   </tr>
                                    
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                <a href="{{url('/user/profile')}}" class="btn btn-success">Back to orders page</a>
                </div>
    </div>
@endsection