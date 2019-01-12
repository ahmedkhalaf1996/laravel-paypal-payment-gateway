@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')


<div class="row">


 @foreach($products as $product => $items)


  <div class="col-sm-3" 
  style="margin-bottom: 10px;
   border: 1px solid #ffc107;
   padding: 20px ">
    <div class="card border-warning mb-3">
      <div class="card-body">
      	    <img class="card-img-top" src="{{ asset('img/phone.jpg') }}" width="200px" height="100px">

        <h5 class="card-title">{{ $items['name']}}</h5>
        <p class="card-body">{{$items['description'] }}</p>
        <strong class="card-text">price: {{ $items['price'] }}</strong>
        <a href="{{ route('product.item',['id' => $items['id']]) }}" class="btn btn-primary pull-right">Details</a>
      </div>
    </div>
  </div>
<dir class="col-sm-1"></dir>

 @endforeach

</div>



@endsection