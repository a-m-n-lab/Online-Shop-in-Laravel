<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}"> 
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 
    <title>JEANNERET</title> 
 
    <!-- Styles --> 

    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

 <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
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
                    <a class="navbar-brand"style="text-decoration:none; color:grey;" href="prod" >Shop</h3>
                </div> 
                    <!-- Right Side Of Navbar --> 
                    <ul class="nav navbar-nav navbar-right"> 
                        <!-- Authentication Links --> 
                        @if (Auth::guest()) 
                            <li><a href="{{ route('login') }}">Login</a></li> 
                            <li><a href="{{ route('register') }}">Register</a></li>                        
                             @else 
                            <li class="nav-item "> 
                               <!-- <a href="#" class="nav-link " role="button"  > 
 
                                    {{ Auth::user()->name }} 
                                </a>  -->
                                </li>
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
 
        @yield('content') 
    </div> 
 
    <!-- Scripts --> 
    <script src="{{ asset('js/app.js') }}"></script> 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body> 
</html> 
