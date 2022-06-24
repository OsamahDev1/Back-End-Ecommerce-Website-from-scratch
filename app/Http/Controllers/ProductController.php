<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    protected function show()
    {
        return view('Products.show');
    }
    public function create()
    {
        $categories = Category::all();
        return view('Products.create', compact('categories'));
    }

    public function store(Request $req)
    {
        //validation for registration form
        $req->validate(
            [
                'product_name' => 'required',
                'price' => 'required',
                'product_category' => 'required',
                'product_img' => 'required',
            ],
            [
                'product_name.required' => 'الرجاء ادخال اسم المنتج',
                'price.required' => 'الرجاء ادخال سعر المنتج',
                'product_category.required' => 'الرجاء ادخال صنف المنتج',
                'product_img.required' => 'الرجاء ادخال صورة المنتج',
            ]
        );

        //add product
        Product::create([
            'name' => $req->name,
            'price' => $req->price,
            'category_id' => $req->product_category,
            // 'img' => $req->img,
        ]);
    }
}
