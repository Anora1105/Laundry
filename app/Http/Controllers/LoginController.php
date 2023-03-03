<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view("login.login");
    }
    public function loginproses(Request $request){
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/');
        }
        return redirect('login');
    }
    public function register(){
        return view("login.register");
    }
    public function registeruser(Request $request){
        User::create([
            'name' =>$request->nama,
            'email' =>$request->email,
            'password' =>bcrypt($request->password)
        ]);
        return redirect('login');
    }
    public function logout(){
        Auth::logout();
        return view('login');
    }
}
