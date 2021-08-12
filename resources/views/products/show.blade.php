@extends('layouts.app') 
 @section('content') 
     <div class="panel panel-default"> 
        <div class="panel-heading"> 
            View Product /Show
        </div> 
        <div class="panel-body">  
            <div class="form-group"> 
            <div class="form-group"><strong>Photo </strong>
            </div>
                 <img src="{{ '../'.$product->photo  }}" width= "250" height="350" /> 
            </div> 
            <div class="form-group"> 
                <strong>Name: </strong> {{ $product->name  }} 
            </div> 
            <div class="form-group"> 
                <strong>Description: </strong> {{ $product->description  }}
            </div> 
            <div class="form-group"> 
                <strong>Price </strong> {{ $product->price  }} 
            </div> 
            
        </div> 
        <div class="pull-left"> 
                <a class="btn btn-default btn btn-secondary btn-lg" href="{{ route('products.index')  }}">Back</a> 
            </div>
        </div> 
 @endsection 
