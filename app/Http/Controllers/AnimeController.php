<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AnimeController extends Controller
{
//Funçao de busca de anime no banco de dados usando o where
    protected function anime($where,$condicao,$valor){
        $resultados = Anime::where($where,$condicao ,$valor)->get();
        return $resultados;
   }
//Metodos do site Principal
    //Metodo para controlar as pesquisas
    public function search(){
        $resultados = $this->anime('nome','like','%'.$_GET['search'].'%');
        return view('site.search', compact('resultados'));
    }

    // Funçao que ira mostrar o Anime
    public function showAnime(string $nome_anime) {
        $anime = $this->anime('nome', '=', $nome_anime);
        $temporadas = Anime::find($anime[0]['cod_anime'])->temporadas;
        
        //Verifica se o anime foi encontrado
        if($anime->count() == 0){
            return redirect()->route('site.naoEncontrado'); 
        }
         // Aumentar Visualização
         $visualizacao = Anime::find($anime[0]['cod_anime']);
         $visualizacao->visualizacoes = $visualizacao->visualizacoes + 1;
         $visualizacao->save();

         //Buscar se o usuario esta logado favorito exite
         if(Auth::check()){
            $favorito = User::find(Auth::user()->cod_user)->favoritos()->where('anime_cod_anime', '=', $anime[0]['cod_anime'])->first();
            return view('site.anime', compact('anime', 'temporadas', 'favorito'));
         }
         
        return view('site.anime', compact('anime', 'temporadas'));
    }

    //Funçao para retornar os animes Populares
    public function popular(){
        $animes = Anime::orderBy('visualizacoes', 'desc')->limit(50)->get();
        return view('site.popular', compact('animes'));
    }

//Metodos do site administratico
    //Funçao que ira retornar o site administrativo de animes
    public function animes() {
        $animes = Anime::all();
        return view('site.admin.animes', compact('animes'));
    }
    //Metodo para mostrar de adicionar novo anime
    public function showNew(){
        return view('site.admin.anime.novo');
    }
    //Metodo para mostrar a tela de editar anime
    public function showEdit(int $cod_anime){
        $anime = $this->anime('cod_anime', '=', $cod_anime);
        return view('site.admin.anime.edit', compact('anime'));
    }
    public function delete(int $cod_anime){
        return redirect()->route('site.admin.animes');
    }
}
