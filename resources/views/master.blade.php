<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Website</title>
 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</head>
<body>
{{View::make('header')}}
    @yield('content')
    <br>
    <br>
    <br><br>
    <br>
    {{view::make('footer')}}
</body>
<style>
body 
{
    height:100%;
    width:100%;
}
.custom-login{
    height:500px;
    padding-top:100px;
}
img.slider-img
{
    margin-top:50px;
    height:400px !important
}
.custom-product
{
    height:600px
}
.slider-text
{
    background-color: #8aa08a6e !important;
}
.trending-image
{
    height:100px
}
.trending-item
{
    float:left;
    width:14%;
 line-height:10px;
    
}
.trending-item a {
    text-decoration:none;
}
.cart-list
{
    border-bottom:1px solid #ccc;
    margin-bottom:20px;
    padding-bottom:20px;
}
.detail-img 
{
    margin-top:60px;
    height:200px
}
b{
    color:#75C6FC;
}
.search-box
{
    width:500px
}
.navbar-header a
{
    color:#76E4D0;
}
.cart-image 
{
    
}
.search-item 
{
    float:left;
    width:15%;
}
.pannel-footer 
{
    position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}
.search-item a 
{
    text-decoration:none;
}
section 
{
   
    width:100%;
    padding-right:0px;
}
.footer-section 
{
    background:#96969a;
    padding: 22px 0 30px;
    color:#fff;
    
    
}
.footer-section a 
{
    text-decoration:none;
    
    color:#fff;
}
.footer-section ul
{
    
    list-style-type: none;
  margin: 0;
  padding: 0;
}
</style>
</html>