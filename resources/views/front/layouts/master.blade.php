<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Page')</title>
    <link rel="stylesheet" href="{{url('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/css/bootstrap.min.css')}}">
    <link href="{{url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300&display=swap')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('frontend/css/style.css')}}">
</head>
<body>
    <header>
    <!-- navbar start here -->
      <div class="nav-top">
        <div class="container">
          <div class="row">
            
              <div class="nav-top-right">
                <ul>
                  <li><a href="{{url('/about')}}">About PC4U</a></li>
                  <li><a href="{{url('/feedbacks and suggestions')}}">Feedbacks & Suggestions</a></li>
                  <li><a href="{{url('/faqs')}}">FAQs</a></li>
                  <li><a href="{{url('/policies')}}">Policies</a></li>
                </ul>
              </div>
            
            
          </div>
        
        
        </div><!--container end-->
      </div> <!--nav-top end-->
      <div class="navbar navbar-expand-lg nav-middle">
        <div class="container">
          <div class="col-md-4">
            <a class="navbar-brand" href="{{url('/')}}">PC<span>4</span>U</a>
          </div>
          <div class="col-md-8">
            <div class="row">
             <div class="col-md-10">
               <form method="GET" action="{{route('product.search')}}" class="search-form">
                 @csrf
                  <input class="form-control form-control-lg search-box" value="{{request()->input('search')}}" type="text" placeholder="Search for product" name="search">
              
             </div>
              <div class="col-md-2">
                <input class="form-control form-control-lg btn btn-search" type="submit" value="Search">
              </div>
              </form>
            </div>               
           </div>
          </div><!--container ends here-->
        </div><!--navbar-midle ends here-->
        <!--nav-bottom starts-->
        <div class="navbar navbar-expand-md nav-bottom ">
         <div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"aria-haspopup="true" aria-expanded="true" >
          <i title="" class="fa fa-bars"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">Home</a>
              </li>
              <li class="nav-item">
              <div class="dropdown nav-link" id="id1">
  <a class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Products
</a>
  <div class="dropdown-menu dropdown-color" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="{{url('/graphiccard')}}">Graphic Cards</a>
    <a class="dropdown-item" href="{{url('/ssd')}}">SSD</a>
    <a class="dropdown-item" href="{{url('/monitor')}}">Monitors</a>
    <a class="dropdown-item" href="{{url('/hdd')}}">HDD</a>
    <a class="dropdown-item" href="{{url('/completedbuild')}}">Completed build</a>
    <a class="dropdown-item" href="{{url('/ram')}}">RAM</a>
  </div>
</div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/completedbuild')}}">Completed builds</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/graphiccard')}}">GRAPHIC CARDS</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/monitor')}}">MONITORS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ssd')}}">SSD</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/hdd')}}">HDD</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/ram')}}">RAM</a>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i> Cart 
                    
                      <strong>{{Cart::getTotalQuantity()}}</strong>
                    
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-item nav-link dropdown-toggle mr-md-2" href="#" id="bd-versions"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user"></i> {{auth()->check()? auth()->user()->name : 'Account'}}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bd-versions">
                        @if(!auth()->check())
                        <a class="dropdown-item " href="{{url('/user/login')}}">Sign In</a>
                        <a class="dropdown-item" href="{{url('/user/signup')}}">Sign Up</a>
                        @else
                        <a class="dropdown-item" href="{{url('/user/profile')}}">Profile</a>
                        <a class="dropdown-item" href="{{url('/user/logout')}}">logout</a>
                        @endif
                    </div>
                </li>
            </ul>
          </div>
         </div><!--container ends here-->
        </div><!--nav-bottom ends here-->


    <!-- navbar end here -->
    <!-- home screen slider starts here -->
   @yield('content')

  </header>
  <footer>
    <section id="contact">
        
        <div class="contact-bg">
            <div class="contact-bg-overlay">
                <div class="container">
                    <div class="row">
                         <div class="col-md-6">
                                 <div class="contact-left">
                                     <div class="contact-tittle pt-4">
                                         <h2>
                                             PC4U
                                         </h2>
                                         <p>
                                         We believe in Simple, Clean & Modern approach to buy and build your own computer.
                                         </p>
                                     </div>
                                     <address class="pt-4">
                                         <p>
                                             <strong>Headquaters:</strong><br>
                                             Mustafabad,Dharampura,Lahore
                                         </p>
                                     </address>
     
                                     <div class="phone-fax-email pt-4">
                                         <p>
                                                 Phone: (92) 323 4003560 <br>
                                                 Fax: (92) 323 4003560  <br>
                                                 Email: wasayabdul328@gmail.com
                                         </p>
                                     </div>
     
                                     <div class="socil-media pt-4 pb-3">
                                         <ul>
                                                 <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                                 <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                 <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                                 <li><a href="#"><i class="fab fa-google-plus"></i></a>
                                                 </li>
                                         </ul>
                                     </div>
     
                                 </div>
                             </div>
                         <div class="col-md-6">
                             <div class="contact-right">
                                 <div class="contact-tittle pt-4">
                                     <h2>CONTACT US</h2>
                                 </div>
                                 <div class="contact-form">
                                     <form action="" >
                                         <input type="text" name="fullname" placeholder="Full name" class="form-control"><br>
                                         <input type="text" name="email" placeholder="Email" placeholder="Email address" class="form-control"><br>
                                         <textarea name="message" placeholder="Message.." class="form-control" id="" cols="30" rows="5"></textarea><br>
                                         <button type="submit" class="btn btn-lg btn-white"> SEND</button>
                                     </form>
                                 </div>
 
                             </div>
                         </div>
                    </div>
                    
                </div>
                 
            </div>
        </div>
        
    </section>
    <div class="footer">
        <div class="footer-bg">
             <div class="container">
                     <div class="row">
                         <div class="col-sm-12 text-center">
                              <p>Copyrights &copy; 2019 All Rights Reserved by PC4U Inc.</p>
                         </div>  
                     </div>
                 </div>
        </div>
        
    </div>
   
</footer>
    
    
    <script src="{{url('frontend/js/all.min.js')}}"></script>
    <script src="{{url('frontend/js/jquery.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js')}}" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="{{url('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{url('frontend/js/custom.js')}}"></script>
</body>
