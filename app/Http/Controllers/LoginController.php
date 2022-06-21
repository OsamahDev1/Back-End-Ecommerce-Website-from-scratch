<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class LoginController extends Controller
{
    public function showlogin(){
        return view('auth.login');   
       }

       public function login(Request $req)
       {
        //validtaion for login
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
		
        //login users
    	
        //  auth()->attempet([$request->email,]) another syntax
        if(Auth::attempt(['email' => $req->email, 'password' => $req->password])){
            return redirect()->route('index');
        }
    	else{
            return redirect()->back()->withErrors('email and password are not matched in our records')
            ->withInput($req->all());
        }
    }
    public function logout(){
        Auth::logout();
        return to_route('index');
    }
        
}