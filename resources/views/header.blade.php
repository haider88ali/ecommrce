<?php
use App\Http\Controllers\productcontroller;
$total=0;
if(Session::has('user'))
{
$total=productcontroller::cartitem();
}
?>
<nav class="navbar navbar-inverse navbar-fixed-top ">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/"> <b style="color:#76E4D0;"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Shopping<span style="color:red">Fobia</span>.pk</b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">Category
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Home appliances</a></li>
          <li><a href="/logout">Home appliances</a></li>
          <li><a href="/logout">Home appliances</a></li>
         
        </ul>
      </li>
        <li><a href="/myorder">Order</a></li>
        
      </ul>
      <form action="/search" class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" name="query" class="form-control search-box" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
      @if(Session::has('user'))
        <li><a href="/cartproduct"><span style="text-size:20px"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart({{$total}})</span></a></li>
       
        <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="">{{Session::get('user')['name']}}
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
         
        </ul>
      </li>
      @else
      <li><a href="/login"><i class="fa fa-user-circle" aria-hidden="true"></i>
 Login</a></li>
      @endif
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>