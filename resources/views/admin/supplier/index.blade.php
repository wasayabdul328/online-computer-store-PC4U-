@extends('admin.layouts.master')

@section('page')
    Suppliers
@endsection
@section('content')
<div class="row">


                    <div class="col-md-12">
                        <!-- @include('admin.layouts.message') -->
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Suppliers</h4>
                                <p class="category">List of all suppliers</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>phone no</th>
                                        
                                        <th>Email</th>
                                        <th>Registered at</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                       @foreach($suppliers as $supplier)
                                    <tr>
                                        <td>{{$supplier->id}}</td>
                                        <td>{{$supplier->name}}</td>
                                        <td>{{$supplier->address}}</td>
                                        <td>{{$supplier->phone_no}}</td>
                                        <td>{{$supplier->email}}</td>
                                        <td>{{$supplier->created_at->diffForHumans()}}</td>
                                    </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>


                </div>
@endsection