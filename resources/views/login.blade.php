@extends('master')
@section("content")
<div class="container custom-login">
<div class="row">
      <div class="col-sm-4 col-sm-offset-4">
      <div class="card">
      
      <div class="jumbotron">
      <div class="card-body">
      <h1 style="text-align:center;color:black"><i class="fa fa-user-circle" aria-hidden="true"></i></h1>
      <form action="/login" method="post">
      @csrf
    
      <div class="form-group">
      <label for="email">Email</label>
    
  <input  type="text" id="email" name="email" placeholder="Email address" class="form-control">
  
      </div>
      <div class="form-group">
      <label for="">Password</label>
      <input type="password" name="password" id="password"  class="form-control " >
     
      </div>
      
      
      
      <div class="form-group">
      <button type="submit" name="submit" class="btn btn-primary"> Login</button>
      <button type="submit" name="submit" class="btn btn-primary"> Login With Google</button>
      </div>
      </form>
      </div>
      </div>
      </div>
      </div>
      </div>
      </div>
@endsection