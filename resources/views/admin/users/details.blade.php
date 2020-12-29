@extends('admin.layouts.master')

@section('page')
User orders details
@endsection

@section('content')

<div class="row">
@if($orders->count()>0)
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">{{$orders[0]->user->name}} details</h4>
            <p class="category">{{$orders[0]->user->name}} order details</p>
        </div>
        <div class="content table-responsive table-full-width">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Product Name</th>

                    <th>Quantity</th>
                    <th>Total Price</th>

                    <th>Status</th>
                </tr>
                </thead>
                <tbody>
                  
                @foreach($orders as $order)
                <tr>
                   <td>{{$order->id}}</td>
                   <td>
                       @foreach($order->products as $item)
                        <table class="table">
                            <tr>
                                <td>
                                    {{$item->product_name}}
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
                        @if($order->status)

                        <span class="label label-success">Confirmed</span>
                        @else
                        <span class="label label-warning">pending</span>
                        @endif

                    </td>
                </tr>
                @endforeach
               
                

                </tbody>
            </table>

        </div>
    </div>
</div>
@else
<p>
     @foreach($users as $user)
        {{$user->name}}
    @endforeach
 does not order any product yet.</p>
@endif


</div>

@endsection