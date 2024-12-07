<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PharIo\Manifest\Author;

class AuthController extends Controller
{
   public function loginform(){
    return view('login');
   }

   
   public function dashboard(Request $request){
    $credentials=$request->validate([
        'email'=>'string|required',
        'password'=>'required'
   ]);

   if(Auth::attempt($credentials)){
    $request->session()->regenerate();
    if(Auth::user()->role==='admin'){
        return redirect()->route('adminpage');
    }
    elseif(Auth::user()->role==='user'){
        return redirect()->route('userpage');

    }

    }
    return back()->withErrors([
        'email'=>'The credental is not match',
    ]);
}

    public function admin(){
    return view('admin');
    }

    public function user(){
        return view('user');
        }

        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->route('loginpage');
        }

    }

