<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    protected function showCartPage()
    {
        return view('cart');
    }
}
