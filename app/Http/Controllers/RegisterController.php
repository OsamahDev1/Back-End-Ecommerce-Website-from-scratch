<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $req)
    {
        //validation for registration form
        $req->validate(
            [
                'name' => 'required|string',
                'email' => 'required|email',
                'password' => 'required',
                'phone' => 'required|numeric',
                'city' => 'required',
                'address' => 'required',
            ],
            [
                'name.required' => 'الرجاء ادخال الاسم',
                'email.required' => 'الرجاء ادخال البريدالالكتروني',
                'email.email' => 'البريد الالكتروني غير صحيح',
                'password.required' => 'الرجاء ادخل كلمة المرور',
                'phone.required' => 'الرجاء ادخال كلمة المرور',
                'phone.numeric' => 'كلمة المرور يجب ان تكون ارقام فقط',
                'phone.required' => 'يجب ادخال المدينة',
                'phone.required' => 'يجب ادخال العنوان',
            ]
        );

        //register users
        $user = User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'contact' => $req->phone,
            'city' => $req->city,
            'address' => $req->address,
            'created_at' => time(),
        ]);

        Auth::login($user);
        return to_route('home');
    }
}
