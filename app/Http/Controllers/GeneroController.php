<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genero;

class GeneroController extends Controller
{
//Metodos do site Principal
    public function index(){
        $generos = genero::all();
        return view('site.generos', compact('generos'));
    }
    public function showAnimeGenero(string $genero){
        $genero = Genero::where('nome','=',$genero)->get();
        return view('site.genero', compact('genero'));
    }
//Metodos do site administratico
    //Funçao que ira retornar o site administrativo de animes
    public function generos() {
        $generos = genero::all();
        return view('site.admin.generos', compact('generos'));
    }
}
