@extends('layouts.app')
<style>
 .masthead {
  height: 100vh;
  min-height: 500px;
  background-image: url('home.jpg');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>

@section('content')
<header class="masthead">
  <div class="container h-100">
    <div class="row h-100 align-items-center">
      <div class="col-12 text-center">
        <h1 class="font-weight-light">JEANNERET</h1>
        <p class="lead">Welcome to our furniture store</p>
      </div>
    </div>
  </div>
</header>
<div class="container"> 
    <div class="row"> 
        <div class="col-md-8 col-md-offset-2"> 
            <div class="panel panel-default"> 
                <div class="panel-heading">JEANNERET - HOME PAGE</div> 
 
                <div class="panel-body"> 
                    @if (session('status')) 
                        <div class="alert alert-success"> 
                            {{ session('status') }} 
                        </div> 
                    @endif 
 
                    <h1> <a href="{{URL::to('products') }}"> SHOW ALL PRODUCTS</a> </h1> 
                </div> 
            </div> 
        </div> 
    </div> 
</div> 

@endsection
