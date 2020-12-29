@extends('admin.layouts.master')

@section('page')
View Products
@endsection

@section('content')

<div class="row">
@include('admin.layouts.message')

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">All Products</h4>
                                <p class="category">List of all stock</p>
                            </div>
                          
                            <div class="content table-responsive table-full-width">
                                
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Desc</th>
                                        <th>Image</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->product_name}}</td>
                                        <td>{{$product->category}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->description}}</td>
                                        <td><img src="{{url('uploads') . '/' .$product->image}}" alt="{{$product->image}}" class="img-thumbnail"
                                                 style="width: 50px"></td>
                                        <td>
                                            {{Form::open(['route'=>['products.destroy',$product->id],'method'=>'DELETE'])}}
                                                {{Form::button('<span class="fa fa-trash"></span>',['type'=>'submit','class'=>'btn btn-sm btn-danger','onclick'=>'return confirm("Are you sure you want to delete this record?")'])}}
                                                {{link_to_route('products.edit','',$product->id,['class'=>'btn btn-sm btn-info ti-pencil'])}}
                                                {{link_to_route('products.show','',$product->id,['class'=>'btn btn-sm btn-primary ti-list'])}}
                                            {{Form::close()}}
                                        
                                        </td>
                                    </tr>
                                    @endforeach
                                   
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>

@endsection