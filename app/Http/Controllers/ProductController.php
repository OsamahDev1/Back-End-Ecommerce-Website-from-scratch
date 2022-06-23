<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    protected function showproducts()
    {
        return view('products');
    }
    public function displayProductAddPage()
    {
        $categories = Category::all();
        return view('addproduct', compact('Category'));
    }

    //    getCategory
}
