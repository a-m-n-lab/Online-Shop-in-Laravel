@extends('layouts.app') 
 @section('content') 
     <div class="panel panel-default"> 
        <div class="panel-heading"> Modify your product /Edit</div> 
        <div class="panel-body"> 
            @if (count($errors) > 0) 
                <div class="alert alert-danger"> 
                    <strong>Eroare:</strong> 
                    <ul> 
                        @foreach ($errors->all() as $error) 
                            <li>{{ $error }}</li> 
                        @endforeach 
                    </ul> 
                </div> 
            @endif 

             {!! Form::model($product, ['method' => 'PATCH','route' => ['products.update', $product->id]]) !!} 
             <div class="form-group"> 
                <label for="name">Name</label> 
                <input type="text" name="name" class="form-control" value="{{$product->name }}"> 
            </div> 
            <div class="form-group"> 
                <label for="description">Description</label> 
                <textarea name="description" class="form-control" rows="3">{{ $product->description }}</textarea> 
            </div> 
            <label for="photo">Photo</label> 
                <input type="text" name="photo" class="form-control" value="{{$product->photo}}"/> 
            <label for="name">Price</label> 
                <input type="text" name="price" class="form-control" value="{{$product->price}}"/> 
            <div class="form-group"> 
                <input type="submit" value="Save changes" class="btn btn-info"> 
                <a href="{{route('products.index') }}" class="btn btn-default">Cancel</a> 
            </div> 
            {!! Form::close() !!} 
        </div> 
        </div>
        
        @endsection