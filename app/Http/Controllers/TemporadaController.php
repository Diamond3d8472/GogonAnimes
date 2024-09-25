<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Temporada;
use App\Models\Anime;

class TemporadaController extends Controller
{
    //Funçao de busca de anime no banco de dados usando o where
    protected function temporada($where,$condicao,$valor){
        $resultados = Temporada::where($where,$condicao,$valor)->get();
        return $resultados;
   }
//Metodos do site Principal
    public function showSeason(string $nome_anime, string $num_temporada){

        $anime = Anime::where('nome','=',$nome_anime)->get();
        $temporada = Anime::find($anime[0]['cod_anime'])->temporadas()->where('num_temporada',$num_temporada)->get();
        $episodios = Temporada::find($temporada[0]['cod_temporada'])->episodios()->get();

        return view('site.season',compact('temporada', 'episodios')); //Metodo para redirecionar para o anime com a temporada certa
    }
//Metodos do site administratico
    public function temporadas(int $cod_anime) { 
        $resultados = $this->temporada('anime_cod_anime','=',$cod_anime);
        return view('site.admin.temporadas', compact('resultados','cod_anime'));
    }
    //Metodo para mostrar de adicionar nova Temporada
    public function showNew(int $cod_anime){
        return view('site.admin.temporada.novo', compact('cod_anime'));
    }
    //Metodo para mostrar a tela de editar Temporada
    public function showEdit(int $cod_anime, int $cod_temporada){
        $temporada = $this->temporada('cod_temporada', '=', $cod_temporada);
        return view('site.admin.temporada.edit', compact('temporada','cod_anime'));
    }
}
