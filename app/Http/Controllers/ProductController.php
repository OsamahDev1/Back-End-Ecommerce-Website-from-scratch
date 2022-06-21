<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected function showproducts(){
        return view('products');   
       }
}
