<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class IndexController extends Controller
{
    public function show()
    {
        $cameras = Product::where('category_id', 3)
            ->limit(4)
            ->get();
        $Tshirts = Product::where('category_id', 2)->get();
        $watchs = Product::where('category_id', 1)->get();
        return view('index', compact('cameras', 'Tshirts', 'watchs'));
    }
}
