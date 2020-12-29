@extends('front.layouts.master')


@section('Page')
SSD
@endsection


@section('content')
<section id="feature-product">
      <div class="container">
      @if(session()->has('msg'))

      <div class="alert alert-success mt-3">
          {{ session()->get('msg')}}
      </div>


      @endif
        <div class="feature-product-heading">
            <h3>SSD</h3>    
        </div>
      </div>
      <div class="container">
      <div class="row text-center">



    @foreach($products as $product)

<div class="col-lg-3 col-md-6 mb-4">
    <div class="card h-100">
        <img class="card-img-top" src="{{url('uploads') . '/' .$product->image}}" alt="{{$product->product_name}} " style="height: 200px;">
        <div class="card-body">
            <h5 class="card-title">{{$product->product_name}}</h5>
            <p class="card-text">{{$product->description}}</p>
        </div>
        <div class="card-footer">
            <strong>Rs {{$product->price}}</strong> &nbsp;
            <form action="{{route('cart')}}" method="post">
              @csrf
              <input name="id" value="{{$product->id}}" type="hidden">
              <input name="name" value="{{$product->product_name}}" type="hidden">
              <input name="price" value="{{$product->price}}" type="hidden">
            <button type="submit" class="btn btn-outline-primary"><i class="fa fa-cart-plus "></i> Add To
                Cart</button>
            </form>
        </div>
    </div>
</div>
    @endforeach
    
        
        <div class="d-flex justify-content-center mx-auto">
        {{$products->links()}}
        </div>
</div>
      </div>
      
    </section>
@endsection