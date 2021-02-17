@extends('master')
@section("content")
<div class="container">
<div class="row">
<div class="col-sm-6">
<img class="detail-img" src="{{$product['gallery']}}" alt="">
</div>
<div class="col-sm-6" style="margin-top:70px;">
<button class="btn btn btn-danger"><a href="/">Go Back</a></button>
<h2>{{$product['name']}}</h2>
<h3>Price:{{$product['price']}}</h3>
<h4>Description: {{$product['description']}}</h4>
<h4>Category: {{$product['category']}}</h4>
<br><br>
<form action="/add_to_cart" method="POST">
@csrf
<input type="hidden" name="product_id" value={{$product['id']}}>
<button class="btn btn-primary">Add To Cart</button>
</form>
<br><br>
<a href="/ordernow"  style="text-decoration:none"><button class="btn btn-danger" >Buy Now</button></a>
</div>
</div>

      </div>
      <br>
      <br><br><br>
@endsection