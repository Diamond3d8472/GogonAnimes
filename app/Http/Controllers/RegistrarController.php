<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrarController extends Controller
{
    //Funçao para mostrar a tela de registro
    public function index(){
        if(auth()->check()){
            return redirect()->route('site.index');
        }
        return view('site.registrar');
    }
    //Funçao para registrar o usuario no banco de dados e redireciona para a pagina de login
    public function registrar(Request $request){
        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]); //Colocar as notificaçoes de erro pelo amor de deus nao esquece animal
 
         $user = new User;
         $user->name = $request->name;
         $user->email= $request->email;
         $user->password = Hash::make($request->password);
         if($user->save()){
            return redirect()->route('site.login')->with('success', 'Registrado com suecesso! Por favor realize o login.');
         }
         return redirect()->route('site.login')->withErrors(['error'=> 'Registrado com suecesso! Por favor realize o login.']);
        
    }
}
