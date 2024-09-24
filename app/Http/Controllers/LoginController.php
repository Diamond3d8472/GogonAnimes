<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        if(Auth::check()){
            return redirect()->route('site.index');
        }
        return view('site.login');
    }

    public function login(Request $request){
        if(Auth::check()){
            return redirect()->route('site.index');
        }
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        $authenticated = Auth::attempt($credentials);
        if($authenticated){
            $request->session()->regenerate();
            return redirect()->route('site.index');
        }
 
        return redirect()->route('site.login')->withErrors(['error'=>'Email ou senha invalidos']);
    }

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('site.login');
        }
        return redirect()->route('site.index');
        
    }
}
