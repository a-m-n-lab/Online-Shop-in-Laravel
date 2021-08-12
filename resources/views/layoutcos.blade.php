
<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>Layout</title>
 <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

</head>
<body>
<div id="app"> 
        <nav class="navbar navbar-default "> 
            <div class="container-fluid"> 
                <div class="navbar-header"> 
                    <!-- Branding Image --> 
                    <a class="navbar-brand" href="{{ url('/') }}"> 
                       Home
                    </a> 
                    <a class="navbar-brand"style="text-decoration:none; color:grey;" href="prod" > Shop</a>
                </div> 
                    <!-- Right Side Of Navbar --> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <!-- Authentication Links --> 
                        @if (Auth::guest()) 
                            <li><a href="{{ route('login') }}">Login</a></li> 
                            <li><a href="{{ route('register') }}">Register</a></li>                        
                             @else 
                            <li class="nav-item "> 
                                    <li> 
                                        <a class="navbar-brand" href="{{ route('logout') }}"        onclick="event.preventDefault(); 
                                                     document.getElementById('logout-form').submit();"> 
                                            Logout 
                                        </a> 
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                                            {{ csrf_field() }} 
                                        </form> 
                                    </li>  
                            </li> 
                        @endif 
                    </ul> 
                </div> 
        </nav> 
        </div>
<div class="container">
 <div class="row">
 <div class="col-lg-12 col-sm-12 col-12 main-section">
 <div class="dropdown">
 <button type="button" class="btn btn-info" data-toggle="dropdown">
 <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
 </button>
<!-- Small cart icon-->
 <div class="dropdown-menu">
 <div class="row total-header-section">
 <div class="col-lg-6 col-sm-6 col-6">
 <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
 </div>
 <?php $total = 0 ?>
 @foreach((array) session('cart') as $id => $details)
 <?php $total += $details['price'] * $details['quantity'] ?>
 @endforeach
 <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
 <p>Total: <span class="text-info">$ {{ $total }}</span></p>
 </div>
 </div>
 @if(session('cart'))
 @foreach(session('cart') as $id => $details)
 <div class="row cart-detail">
 <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
 <img src="{{ $details['photo'] }}" width="250" height="350" class="img-responsive" />
 </div>
 <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
 <p>{{ $details['name'] }}</p>
 <span class="price text-info"> ${{ $details['price'] }}</span> <span
class="count"> Quantity:{{ $details['quantity'] }}</span>
 </div>
 </div>
 @endforeach
 @endif
 <div class="row">
 <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
 <a href="{{ url('cart') }}" class="btn btn-primary btn-block">Show cart</a>
 </div>
 </div>
 </div>
 </div>
 </div>
 </div>
</div>
<div class="container page">
 @yield('content')
</div>

@yield('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> 
</body>

</html>