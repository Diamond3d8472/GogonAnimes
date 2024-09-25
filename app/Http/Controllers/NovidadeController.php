<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Episodio; 
use Carbon\Carbon;

class NovidadeController extends Controller
{
    public function index(){

        // Pega a data de hoje
        $hoje = Carbon::today();

        // Busca os episódios lançados hoje
        $episodiosHoje = Episodio::whereDate('created_at', $hoje)->orderBy('created_at', 'desc')->get();

        // Busca os episódios lançados em outros dias
        $episodiosOutrosDias = Episodio::whereDate('created_at', '<', $hoje)->orderBy('created_at', 'desc')->get();

        return view("site.new", compact('episodiosHoje', 'episodiosOutrosDias'));
    }
}
