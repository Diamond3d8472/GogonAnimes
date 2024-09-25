<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\User;
use App\Models\Temporada;
use App\Models\Genero;

class AdminController extends Controller
{
    public function index(){
        
        $animes = Anime::all();
        $usuarios = User::all();
        $generos = Genero::all();
        $temporadas = Temporada::all();
        return view('site.admin.principal', compact('animes', 'usuarios', 'generos', 'temporadas' ));
        
    }
    public function administradores() { 
        $admins = User::all();
        return view('site.admin.administradores', compact('admins'));
    }
}
