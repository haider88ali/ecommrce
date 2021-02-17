@extends('master')
@section("content")
<div class="cart-product" style="margin-top:70px">



<div class="col-sm-8 ">
<br>
<br>
<table class="table">
    <tbody>
      <tr>
        <td>Amount</td>
        <td>{{$totals}}</td>
      </tr>
      <tr>
        <td>Tax</td>
        <td>$ 0</td>
        
      </tr>
      <tr>
       
        <td>Delivery</td>
        <td>$ 10</td>
      </tr>
      <tr>
        <td>Total Amount</td>
        <td>{{$totals + 10}}</td>
      </tr>
    </tbody>
  </table>
  <form action="/orderpay" method="POST">
  @csrf
  <div class="form-group">
    <textarea name="address" placeholder="enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="payment">Payment Method</label><br><br>
    <input type="radio" value="cash" name="payment"><span> Online Payment </span><i class="fab fa-amazon-pay"></i><br><br>
    <input type="radio"  value="cash" name="payment"><span>Emi </span><br><br>
    <input type="radio"  value="cash" name="payment"><span>Delivery on payment </span><br><br>
  </div>
 
  <a href="/ordernow"  style="text-decoration:none"><button class="btn btn-success" >Order Now</button></a>
</form>
 
</div>

      </div>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
@endsection