<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\auth;

class authController extends Controller
{
    public function index(){
        return view('login');
    }
    public function login(Request $request){
        $credentials = $request->only(['username', 'password']);
        if(auth::attempt($credentials)){
            return redirect('home');
        }else{
            return redirect()->back()->withErrors(['message'=>'Invalid username or password']);
        }
    }
    public function logout(){
        auth::logout();

        return redirect('/login');
    }
    public function register(){
        return view('register');
    }
}
