<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Favorito;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class FavoritoController extends Controller
{
    public function index(){
        if(!Auth::check()){
            return redirect()->route("site.login");
        }

        //Buscando as informaçoes do usuario
        $favoritos = User::find(Auth::user()->cod_user)->favoritos;

        return view("site.favorito", compact("favoritos"));
    }

    public function salvarFavorito($cod_anime){
        $favorito = new Favorito();
        $favorito->anime_cod_anime = $cod_anime;
        $favorito->user_cod_user = Auth::user()->cod_user;

        if($favorito->save()){
            return redirect()->route('site.favoritos')->with('success', 'Favorito salvo com sucesso');
        }
        return redirect()->route('site.favoritos')->withErrors(['error'=> 'Favorito não Salvo']); // Lembrar de fazer texto de confirmaçao
    }

    public function removerFavorito($cod_anime){
        //Buscar se o favorito exite
        $favorito = User::find(Auth::user()->cod_user)->favoritos()->where('anime_cod_anime', '=', $cod_anime)->first();
        if($favorito->delete()){
            return redirect()->route('site.favoritos')->with('success', 'Favorito removido com sucesso');
        }
        return redirect()->route('site.favoritos')->withErrors(['error'=> 'Favorito não removido']); // Lembrar de fazer texto de confirmaçao
    }
}
