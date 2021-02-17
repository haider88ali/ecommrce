@extends('master')
@section("content")
<div class="cart-product" style="margin-top:70px">



<div class="col-sm-10">
<div class="trending-wrapper">
<h3>Cart Items</h3>
@foreach($products as $items)
<div class="row searched-item cart-list">
<div class="col-sm-3">
     <a href="detail/{{$items->id}}">
     <img class="trending-image cart-img" src="{{$items->gallery}}">
      
      </a>
    </div>
    <div class="col-sm-4" >
     
      <div class="">
        <h2>{{$items->name}}</h2>
        <h5>{{$items->description}}</h5>
       
      </div>
     
    </div>
    <div class="col-sm-3" >
    <a href="/removecart/{{$items->cart_id}}"  style="text-decoration:none"><button class="btn btn-warning" >Remove from Cart</button></a>
    </div>
    </div>
@endforeach
</div>
<a href="/ordernow"  style="text-decoration:none"><button class="btn btn-success" >Order Now</button></a>
<br>
<br>
</div>
      </div>
      <br>
      <br>
@endsection