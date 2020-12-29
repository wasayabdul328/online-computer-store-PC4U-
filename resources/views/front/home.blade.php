@extends('front.layouts.master')

@section('content')

<section class="home-slider">
      <div class="container">
        
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="{{url('frontend/images/hard.jpg')}}" alt="Hardrive image">
              <div class="carousel-caption d-none d-md-block">
                <h5>Shop your compatible computer component</h5>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat necessitatibus, alias at cum id tempora voluptatem voluptas inventore earum vel cumque veniam! Facere, corrupti itaque?</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{url('frontend/images/processor (2).jpg')}}" alt="Image of intel processor">
              <div class="carousel-caption d-none d-md-block">
                <h5>find processors</h5>
                <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, officia! consectetur Lorem ipsum dolor sit, amet consectetur adipisicing elit. Suscipit, sapiente. adipisicing elit. Optio tenetur, corrupti ipsa ipsum molestias tempora eius illo laboriosam dicta nisi!</p>
              </div>
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="{{url('frontend/images/computer.jpg')}}" alt="A computer setup">
              <div class="carousel-caption d-none d-md-block">
                <h5>Now you can build your own pc</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto deleniti quos dolorum harum recusandae laudantium voluptatem ea, nam nulla reiciendis facere natus nobis ipsum, error quas nemo officiis exercitationem. Laudantium!</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section><!-- home screen slider ends here -->
    
    <section id="feature-product">
      <div class="container">

      @if(session()->has('msg'))

      <div class="alert alert-success mt-3">
          {{ session()->get('msg')}}
      </div>


      @endif
        <div class="feature-product-heading">
            <h3>Feature Products</h3>    
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