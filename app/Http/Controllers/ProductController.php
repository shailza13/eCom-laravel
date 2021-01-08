<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\Product;
use App\Models\Cart;
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
        ->select('products.*')
        ->where('carts.user_id',$userId)
        ->get();
        return view('cartlist',['Products'=>$data]);
    }
}
