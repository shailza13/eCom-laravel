<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('Products')->insert([
         	[
        	'name'=>'One Plus Mobile',
        	'price'=>'25000',
        	'description'=>'A Smart Phone with 124gb ram and much more features',
        	'category'=>'Mobile',
        	'gallery'=>'https://cdn.imgbin.com/10/9/18/imgbin-android-lg-electronics-oneplus-3t-smartphone-android-qV1UQEcJZrmVHMVqMXscHRDpU.jpg'
    ],
    [
    	'name'=>'LG Mobile',
        	'price'=>'10000',
        	'description'=>'A Smart Phone with 4gb ram and much more features',
        	'category'=>'Mobile',
        	'gallery'=>'https://www.lg.com/in/mobile-phones/lg-lmg910emw-illusion-sunset#none'
    ],
    [
    	'name'=>'Samsung TV',
        	'price'=>'25000',
        	'description'=>'A Smart TV with 4gb ram and much more features',
        	'category'=>'TV',
        	'gallery'=>'https://5.imimg.com/data5/EA/JR/MY-37593200/w-500x500.jpg'
    ]
]);
    }
}
