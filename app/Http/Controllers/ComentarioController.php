<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\Episodio;

class ComentarioController extends Controller
{
//Metodos do site Principal
    //Funçao para salvar comentario do episodio
    public function comentar(Request $request, $cod_episodio){
        //Verifica se o usuario esta logado antes de salvar o comentario
        if(!auth()->check()){
            return redirect()->route('site.index');
        }

        //Salva as informaçoes do comentario num objeto
        $comentario = new Comentario();
        $comentario->user_cod_user = auth()->user()->cod_user;
        $comentario->episodio_cod_episodio = $cod_episodio;
        $comentario->comentario = $request->conteudo;
        
        //Realiza uma tentativa de salvar o comentario e caso nao sendo possivel ele retorna para o site.naoEncontrado
        if ($comentario->save()) {
            $episodio = Episodio::find($cod_episodio);
            return redirect()->route('site.episode', ['nome_anime' => $episodio->temporada->anime['nome'], 'num_temporada' => $episodio->temporada['num_temporada'], 'num_episodio' => $episodio['num_ep']]);
        } else {
            return redirect()->route('site.naoEncontado');
        }
    }

    //Funçao para remover comentario do usuario
    public function removerComentario($cod_episodio, $cod_comentario){
        //Verifica login
        if(auth()->check()){
            //Busca o comentario
            $comentario = Comentario::find($cod_comentario);

            //Verifica se o comentario pertece aquele usuario antes 
            if($comentario->usuario->cod_user == auth()->user()->cod_user){
                $comentario->delete();
                //Busca as informaçoes do episodio para voltar para ele
                $episodio = Episodio::find($cod_episodio);
                return redirect()->route('site.episode', ['nome_anime' => $episodio->temporada->anime['nome'], 'num_temporada' => $episodio->temporada['num_temporada'], 'num_episodio' => $episodio['num_ep']]);
            }
        }
    }

//Funçoes administrativas
    //Funçao que leva todos os comentarios ja feitos para o administrativo
    public function comentarios() { 
        $comentarios = Comentario::all();
        return view('site.admin.comentarios', compact('comentarios'));
    }
}
