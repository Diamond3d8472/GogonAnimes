<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index(){
        return view('site.contato');
    }

    public function showmessage(string $nome, string $message){
        return "Mensagem do $nome \r\n $message";
    }
}
