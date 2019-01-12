<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
   public function getIndex(){

   	  $products = array( 
        [
         'id' => 0,
         'name' => 'iphone',
         'price' => '100',
         'description'  => 'fake iphone'],[
         'id' => 1,
         'name' => 'galaxy',
         'price' => '80',
         'description'  => 'fake galaxy'],[
         'id' => 2,
         'name' => 'iphone 8',
         'price' => '150',
         'description'  => 'fake iphone 8'],[
         'id' => 3,
         'name' => 'galaxy note',
         'price' => '160',
         'description'  => 'fake galaxy note']
   	  );
   	  return view('product.index',compact('products'));

   }

   public function getitem($id){
   	  $products = array( 
        [
         'id' => 0,
         'name' => 'iphone',
         'price' => '100',
         'description'  => 'fake iphone'],[
         'id' => 1,
         'name' => 'galaxy',
         'price' => '80',
         'description'  => 'fake galaxy'],[
         'id' => 2,
         'name' => 'iphone 8',
         'price' => '150',
         'description'  => 'fake iphone 8'],[
         'id' => 3,
         'name' => 'galaxy note',
         'price' => '160',
         'description'  => 'fake galaxy note']
   	  );
    // $id = $id;
   	return view('product.item', compact('products','id'));
   }





}
