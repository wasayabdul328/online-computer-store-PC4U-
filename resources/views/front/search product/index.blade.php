@extends('front.layouts.master')

@section('Page')
Search Product
@endsection
@section('content')
<section id="aboutus">
      <div class="container">
        <div class="aboutheading">
          <h3>Search Product</h3>
        </div>
        @if($products->count() > 0)
        <p>{{$products->total()}} results found.</p>
        @else
        <p>No result found.</p>
        @endif
      </div>
    </section>
    <section id="feature-product">
      <div class="container">

      @if($errors->any())
        @foreach($errors->all() as $error)
        <div class="alert alert-warning mt-3">
          {{$error}}
        </div>

        @endforeach
      @endif
       



   <div class="row">
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
   </div>
    
        
        <div class="d-flex justify-content-center mx-auto">
        {{$products->links()}}
        </div>
</div>
      </div>
      
    </section>
@endsection
