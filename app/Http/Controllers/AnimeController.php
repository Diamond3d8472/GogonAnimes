<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('site.anime');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    //Metodo para controlar as pesquisas
    public function search(){
        return view('site.search');
    }
  
    public function showAnime(string $nome_anime) 
    { 
        return view('site.anime', compact('nome_anime')); //metodo para redirecionar para o site com o anime certo
    }

    public function showSeason(string $nome_anime, int $season_id){
        return view('site.season',compact('nome_anime','season_id')); //Metodo para redirecionar para o anime com a temporada certa
    }

    public function showEpisode(string $nome_anime, int $season_id, int $ep_id){
        return view('site.ep', compact('nome_anime','season_id', 'ep_id')); // -> metodo compact onde usamos o metodo compact e passamos dentro dele os parametros das variaveis que queremos passar para a view atraves tambem de um array associativo
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return 'edit';
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
// return view('site.anime', ['id' => $id]); ->Metodo do array associativo
//return view('site.anime')->with('id', $id); // Usando o metodo with eu consigo passar o valor para a view associando o valor adicionado a view com o recebido como parametro pela função
