@extends('layouts.app') 
@section('content')
 @if ($message = Session::get('success'))
 <div class="alert alert-success">
 <p>{{ $message }}</p>
 </div>
 @endif
 <div class="panel panel-default">
 <div class="panel-heading">
 Products list 
 </div>
 <div class="panel-body">
 <div class="form-group">
 <div class="pull-leftt">
 <a href="/products/create" class="btn btn-default btn btn-secondary btn-lg">Add new products</a>
 </div>
 </div>
 <table class="table table-bordered table-stripped">
 <tr>
 <th width="20">ID</th>
 <th>Photo</th>
 <th>Name</th>
 <th>Description</th>
 <th> Price</th>
 <th width="300">Action</th>
 </tr>
 @if (count($products) > 0)
 @foreach ($products as $key => $product)
 <tr>
 <td>{{ ++$i }}</td>
 <td> <img src="{{$product->photo}}" width="400" height="400"/></td>
 <td>{{ $product->name }}</td>
 <td>{{ $product->description }}</td>
 <td> {{$product->price}}$</td>
 <td>
 <a class="btn btn-outline-success" href="{{ route('products.show',$product->id) }}">View</a>
 <a class="btn btn-outline-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
 {{ Form::open(['method' => 'DELETE','route' => ['products.destroy', $product->id],'style'=>'display:inline']) }}
 {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
 {{ Form::close() }}
 </td>
 </tr>
 @endforeach
 @else
 <tr>
 <td colspan="4">Nu exista produse!</td>
 </tr>
 @endif
 </table>
{{$products->render()}}
 </div>
 </div>
@endsection