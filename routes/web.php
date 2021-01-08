<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'login']);
Route::get('/',[ProductController::class,'index']);	
//Route for product detail page
Route::get('detail/{id}',[ProductController::class,'detail']);
//Search Product
Route::get('search',[ProductController::class,'search']);
//Add To Cart
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
//Logout 
Route::get('/logout',[ProductController::class,'logout']);
//List Cart Items
Route::get('/cartList',[ProductController::class,'cartList']);

