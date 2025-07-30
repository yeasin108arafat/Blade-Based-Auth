<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    public function index(){
        return view('login');
    }

    public function login(Request $request){
        $user = $request->validate([
            'email'      => 'required',
            'password'  => 'required|min:6'
        ]);

        $credentials = $request->only('email','password');

        if(Auth::attempt($credentials)){
            return redirect()->intended('dashboard');
        }
        return back()->withErrors(['email'=>'Invalid Credentials']);

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect()->route('home');
    }
}
