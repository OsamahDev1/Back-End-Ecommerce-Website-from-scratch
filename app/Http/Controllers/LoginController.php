<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store(Request $req)
    {
        //validtaion for login form
        $req->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'name.required' => 'الرجاء ادخال الاسم',
                'email.required' => 'الرجاء ادخال البريدالالكتروني',
                'email.email' => 'البريد الالكتروني غير صحيح',
            ]
        );

        //login users

        //  auth()->attempet([$request->email,]) another syntax
        if (
            Auth::attempt([
                'email' => $req->email,
                'password' => $req->password,
            ])
        ) {
            return to_route('home');
        } else {
            return redirect()
                ->back()
                ->with('error', 'البريد الالكتروني او كلمة المرور غير صحيحة')
                ->withInput($req->all());
        }
    }
    public function destroy()
    {
        Auth::logout();
        return to_route('home');
    }
}
