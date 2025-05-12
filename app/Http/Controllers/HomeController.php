<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function servicos(){

     $servicos = Servico::orderBy('created_at','desc')->get();

     $usuarios = User::all();
    
     
    return view('connected.home', compact('servicos', 'usuarios'));

    }
}
