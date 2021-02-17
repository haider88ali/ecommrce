@extends('master')
@section("content")
<div class="custom-product">
<h2>Result For Products</h2>
<div class="col-sm-4">
<a href="#">Filter</a>
</div>

<div class="col-sm-13">

<br><br>
<br><br>
@foreach($products as $items)
<div class="search-item">
     <a href="detail/{{$items['id']}}">
     <img class="trending-image" src="{{$items['gallery']}}">
      <div class="">
        <h2>{{$items['name']}}</h2>
        <h5>{{$items['description']}}</h5>
       
      </div>
      </a>
    </div>
@endforeach
</div>
      </div>
@endsection