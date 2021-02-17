@extends('master')
@section("content")
<div class="cart-product" style="margin-top:70px">



<div class="col-sm-10">
<div class="trending-wrapper">
<h3>My orders</h3>
@foreach($products as $items)
<div class="row searched-item cart-list">
<div class="col-sm-3">
     <a href="detail/{{$items->id}}">
     <img class="trending-image cart-img" src="{{$items->gallery}}">
      
      </a>
    </div>
    <div class="col-sm-4" >
     
      <div class="">
        <h5>Name: {{$items->name}}</h5>
        <h5>Delivery Status:  {{$items->status}}</h5>
        <h5>Address:  {{$items->address}}</h5>
        <h5>payment Status:  {{$items->payment_status}}</h5>
        <h5>payment method:  {{$items->payment_method}}</h5>
       
      </div>
     
    </div>
   
    </div>
@endforeach
</div>

<br>
<br>
</div>
      </div>
      <br>
      <br>
@endsection