<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Filesystem\Filesystem;  

class ProductController extends Controller
{
    protected function show()
    {
        return view('Products.show');
    }
    public function __construct()
    {
        $this->middleware('auth');
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

        //store img
        if($req->hasFile('product_img'))        
        {
        $file_extension = $req->product_img->getClientOriginalExtension();
        $file_name = time().'.'.$file_extension;
        $path = 'img';
        $req->product_img->move($path,$file_name);
        }
        else 
        {
            $file_name = null;
        }


        //store product
        
        Product::create([
            'name' => $req->product_name,
            'price' => $req->price,
            'img' => $file_name,
            'category_id' => $req->product_category,
            'created_at' => time(),
        ]);
        return to_route('index');
    }
}
