<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episodio;
use App\Models\Temporada;
use App\Models\Anime;
use App\Models\Comentario;

class EpisodeController extends Controller
{

//Metodos do site Principal
    //Funçao para Mostrar o episodio, proximos episodios, e comentarios daquele episodio
    public function showEpisode(string $nome_anime, int $num_temporada, int $num_episodio)
    {

        //Variaveis para assitir o episodio ---- LEMBRAR DE OTIMIZAR ESSA PARTE DO CODIGO
        $anime = Anime::where('nome', '=', $nome_anime)->get();
        $temporada = Anime::find($anime[0]['cod_anime'])->temporadas()->where('num_temporada', $num_temporada)->get();
        $episodios = Temporada::find($temporada[0]['cod_temporada'])->episodios()->get();
        $episodio = Temporada::find($temporada[0]['cod_temporada'])->episodios()->where('num_ep', $num_episodio)->get();

        //Verifica se o episodio foi emcontrado -- Lembrar de verificar essa parte do codigo
        if ($episodio->count() == 0) {
            return redirect()->route('site.naoEncontrado');
        }
        //Puxar os comentarios do episodio
        $comentarios = Episodio::find($episodio[0]['cod_episodio'])->comentarios; //Verificar a necessidade de usar isso quando eu posso usar as chaves estrangeiras para puxar isso diretamente do blade do episodio

        // Aumentar Visualização -------- Otimizar essa consulta visto que eu ja tenho o episodio puxado
        $visualizacao = Episodio::find($episodio[0]['cod_episodio']);
        $visualizacao->visualizacoes = $visualizacao->visualizacoes + 1;
        $visualizacao->save();

        // Retorna o site do episodio com as variaveis para rodar o episodio
        return view('site.ep', compact('anime', 'temporada', 'episodio', 'comentarios', 'episodios'));
    }

//Metodos do site administratico
    public function episodios(int $cod_anime, int $cod_temporada)
    {
        $episodios = Temporada::find($cod_temporada)->episodios()->get();
        return view('site.admin.episodios', compact('episodios', 'cod_anime', 'cod_temporada'));
    }
    //Metodo para mostrar de adicionar nova Episodio
    public function showNew(int $cod_anime, int $cod_temporada)
    {
        return view('site.admin.episodio.novo', compact('cod_anime', 'cod_temporada'));
    }
    //Metodo para mostrar a tela de editar Episodio
    public function showEdit(int $cod_anime, int $cod_temporada, int $cod_episodio)
    {
        $episodio = $this->episodio('cod_episodio', '=', $cod_episodio);
        return view('site.admin.episodio.edit', compact('episodio', 'cod_anime', 'cod_episodio'));
    }
}
