<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function servicos(){

     $servicos = Servico::all();

     $usuarios = User::all();
    
     // Retorna para a view com os usuários
    return view('connected.home', compact('servicos', 'usuarios'));

    }
}
