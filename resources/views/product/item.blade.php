<h1>the item</h1>


@extends('layouts.master')

@section('title')
    Laravel Shopping Cart
@endsection

@section('content')


<div class="row">


</div>

<div class="row">
	<div class="col-sm-4"></div>
<div class="col-sm-4 text-center" 
style="margin-bottom: 10px;
border: 1px solid #ffc107;
padding: 20px ">
<div class="card border-warning mb-3">
  <div class="card-body">
  	    <img class="card-img-top" src="{{ asset('img/phone.jpg') }}" width="200px" height="100px">

    <h5 class="card-title">{{ $products[$id]['name'] }}</h5>
    <p class="card-body">{{ $products[$id]['description'] }}</p>
    <strong class="card-text">price: {{ $products[$id]['price'] }}</strong>


    <form method="POST"  action="{{ route('pay') }}">
    	{{ csrf_field() }}
     <input type="hidden" name="price" value="{{ $products[$id]['price'] }}">
     <input type="hidden" name="name"  value="{{ $products[$id]['name'] }}">
     <button  class="btn btn-success pull-right">Bay Now</button>
    </form>



   </div>
 </div>
</div>
</div>



@endsection