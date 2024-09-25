<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Episodio;

class ComentarioController extends Controller
{
//Metodos do site Principal
    //Funçao para salvar comentario do episodio
    public function comentar(Request $request, $cod_episodio)
    {
        if(!auth()->check()){
            return redirect()->route('site.index');
        }
        $comentario = new Comentario();
        $comentario->user_cod_user = auth()->user()->cod_user;
        $comentario->episodio_cod_episodio = $cod_episodio;
        $comentario->comentario = $request->conteudo;
        if ($comentario->save()) {
            $episodio = Episodio::find($cod_episodio);
            return redirect()->route('site.episode', ['nome_anime' => $episodio->temporada->anime['nome'], 'num_temporada' => $episodio->temporada['num_temporada'], 'num_episodio' => $episodio['num_ep']]);
        } else {
            return redirect()->route('site.naoEncontado');
        }
    }

//Funçoes administrativas
    //Funçao que leva todos os comentarios ja feitos para o administrativo
    public function comentarios() { 
        $comentarios = Comentario::all();
        return view('site.admin.comentarios', compact('comentarios'));
    }
}
