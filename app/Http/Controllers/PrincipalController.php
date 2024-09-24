<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Anime;
use App\Models\temporada;
use App\Models\episodio;
use Carbon\Carbon;

class PrincipalController extends Controller
{
    public function index(){

        $animes = Anime::orderBy('created_at', 'desc')->get();
        $temporadas = Temporada::orderBy('created_at', 'desc')->get();
        $episodios = Episodio::all();

        // Pega a data de hoje
        $hoje = Carbon::today();

        // Busca os episódios lançados hoje
        $episodiosHoje = Episodio::whereDate('created_at', $hoje)->orderBy('created_at', 'desc')->get();

        // Busca os episódios lançados em outros dias
        $episodiosOutrosDias = Episodio::whereDate('created_at', '<', $hoje)->orderBy('created_at', 'desc')->get();

        return view('site.principal',compact('animes','temporadas','episodios', 'episodiosHoje', 'episodiosOutrosDias'));
    }
}
