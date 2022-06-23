<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function showHomePage()
    {
        return view('home');
    }
}
