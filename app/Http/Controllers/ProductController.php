<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{
    function index()
    {
    	$data=Product::all();
    	return view('product',['products'=>$data]);
    }

    function detail($id)
    {
    	$data=Product::find($id);
    	return view('detail',['Detail'=>$data]);
    }

    //Search Function
    function search(Request $req)
    {
    	$data=Product::where('name','like','%'.$req->input('query').'%')->get();
    	return view('search',['Searchproduct'=>$data]);
    }

    //Add To cart
    function addToCart(Request $req)
    {
    	if($req->session()->has('user'))
    	{
    		$cart=new Cart;
    		$cart->user_id=$req->session()->get('user')['id'];
    		$cart->product_id=$req->product_id;
    		$cart->save();
    		return redirect('/');
    	}
    	else
    	{
    		return redirect('/login');
    	}
    }

    //Count Cart Items
    static function cartItem()
    {
    	$userId=Session::get('user')['id'];
    	return Cart::where('user_id',$userId)->count();
    }

    //Logout
   	function logout()
    {
    	session::forget('user');
    	return redirect('/login');
    }

    //Cart Listing
    function cartList()
    {
        $userId=Session::get('user')['id'];
        $data=DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->select('products.*','carts.id as cart_id')
        ->where('carts.user_id',$userId)
        ->get();
        return view('cartlist',['Products'=>$data]);
    }
    //Remove Cart
    function removeCart($id)
    {
       Cart::destroy($id);
       return redirect('cartList');
    }
    //Order Now
    function orderNow()
    {
        $userId=Session::get('user')['id'];
         $total=DB::table('carts')
        ->join('products','carts.product_id','products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    //ORder Place
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
        $allCart=Cart::where('user_id',$userId)->get();
        foreach($allCart as $cart)
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="Pending";
            $order->payment_method=$req->payment;
            $order->payment_status="Pending";
            $order->save();
        }
        $allCart=Cart::where('user_id',$userId)->delete();
        return redirect('/');
        //return $req->input();
    }
}
