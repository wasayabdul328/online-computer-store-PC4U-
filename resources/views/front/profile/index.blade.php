@extends('front.layouts.master')

@section('Page')
    User Profile
@endsection

@section('content')
<section id="aboutus">
      <div class="container">
        <div class="aboutheading">
          <h3>{{auth()->user()->name . " Profile"}}</h3>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                <th colspan="2">
                {{auth()->user()->name . " Details"}} <a href="#" style="color: blue;float:right"><i class="fa fa-cogs"></i>Edit User</a>
                </th>
                </tr>
            </thead>
            <tr>
                <th>
                    Id
                </th>
                <td>
                    {{$user->id}}
                </td>
            </tr>
            <tr>
                <th>
                    Name
                </th>
                <td>
                    {{$user->name}}
                </td>
            </tr>
            <tr>
                <th>
                    Email
                </th>
                <td>
                    {{$user->email}}
                </td>
            </tr>
            <tr>
                <th>
                    Registered at
                </th>
                <td>
                    {{$user->created_at->diffForHumans()}}
                </td>
            </tr>
        </table>
       
       
        <div class="aboutheading">
          <h3>{{auth()->user()->name . " Orders"}}</h3>
        </div>
        
                            
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($user->order as $order)
                                    <tr>
                                        <td>{{$order->id}}</td>
                                        
                                        <td>
                                            <table class="table">
                                            @foreach($order->products as $item)
                                                <tr>
                                                    <td>
                                                    
                                                     {{$item->product_name}}
                                                     
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                            @foreach($order->OrderItems as $item)
                                                <tr>
                                                    <td>
                                                    
                                                     {{$item->quantity}}
                                                    
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>
                                            <table class="table">
                                            @foreach($order->OrderItems as $item)
                                                <tr>
                                                    <td>
                                                    
                                                     {{$item->price}}
                                                   
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </table>
                                        </td>
                                        <td>
                                            @if($order->status)
                                                <span class="label label-success">Confirmed</span>
                                            @else
                                                <span class="label label-warning">Pending</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{url('/user/order').'/'. $order->id}}" class="btn btn-outline-success"> Details</a>
                                        </td>
                                      
                                        
                                    @endforeach
                                  

                                    </tbody>
                                </table>

                            </div>
                        
      </div>
        <!-- container ends here -->
    </section>
@endsection