<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use App\Models\Cart;
use App\Models\User;
use App\Models\order;
use Session;
use Illuminate\Support\Facades\DB;
class productcontroller extends Controller
{
    //
    public function index()
    {
        $data=product::all();
        return view('product',['products'=>$data]);
    }
    public function details($id)
    {
        $data=product::find($id);
        return view('detail',['product'=>$data]);
    }
    public function Search(Request $req)
    {
         $data=product::where('name', 'like' , '%'.$req->input('query').'%')->get();
         return view('search',['products'=>$data]);
    }
    public function addtocart(Request $req)
    {
        
        if($req->session()->has('user'))
        {
            $cart=new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
    
            $cart->product_id=$req->product_id;
            $cart->Save();
            return redirect('/login');
    }
    else{
        return redirect('/login');
    }
}
static function cartitem()
{
    $userid=Session::get('user')['id'];
    return Cart::where('user_id',$userid)->count();
}
public function cartlist()
{
 $userid=Session::get('user')['id'];
 $products=DB::table('cart')
 ->join('product','cart.product_id','=','product.id')
 ->where('cart.user_id',$userid)
 ->select('product.*','cart.id as cart_id')
 ->get();
 return view('cartlists', ['products'=>$products]);
}
function removeCart($id)
{
    cart::destroy($id);
    return redirect('/cartproduct');
}
function orderCart()
{
    $userid=Session::get('user')['id'];
    $total=DB::table('cart')
    ->join('product','cart.product_id','=','product.id')
    ->where('cart.user_id',$userid)
    ->sum('product.price');
    return view('ordercart', ['totals'=>$total]);
}
function ordernow(Request $req)
{
    $userid=Session::get('user')['id'];
     $allcart=Cart::where('user_id',$userid)->get();
     
     foreach($allcart as $cart)
     {
         $order=new order;
         $order->product_id=$cart['product_id'];
         $order->user_id=$cart['user_id'];
         $order->status="pending";
         $order->payment_method=$req->payment;
         $order->payment_status="pending";
         $order->address=$req->address;
         $order->save();
         cart::where('user_id',$userid)->delete();
     }
     $req->input();
     return redirect('/');
}
function Myorder()
{
    $userid=Session::get('user')['id'];
    $orders =DB::table('orders')
    ->join('product','orders.product_id','=','product.id')
    ->where('orders.user_id',$userid)
    ->get();
    return view('myorders', ['products'=>$orders]);
}
}
