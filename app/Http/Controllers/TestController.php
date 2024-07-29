<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        $funcionarios = [
            0 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '11', 'tel' => '994899749'], 
            1 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            2 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            3 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            4 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            5 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            6 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            7 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            8 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745'],
            9 => ['nome' => 'Walter', 'Funçao' => 'Caixa', 'cnpj' => '1212213312123', 'ddd' => '21', 'tel' => '994899745']
        ];

        // $funcionarios = [];
        return view('site.teste', compact('funcionarios'));
    }
}
