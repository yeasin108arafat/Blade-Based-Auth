<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    

    public function index(){
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'password'      => 'required|confirmed|min:6',
        ]);

        $user = User::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'password'  => bcrypt($request->password)
        ]);

        Auth::login($user);
        return redirect()->route('dashboard');
    }
}
