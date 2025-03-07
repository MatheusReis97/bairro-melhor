<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\PerfilController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use app\Http\Controllers\ServicosController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
})->name('inicio');

Route::get('/cadastrar', function(){
    return view('cadastrar');
})->name('cadastrar');

Route::post('/cadastrar', [CadastroController::class, 'cadastrar'])->name('cadastrando');


Route::get('/login', function(){ return view('login');})->name('logar');

Route::post('/login', [LoginController::class, 'login'])->name('Login');

Route::middleware('auth')->group(function(){
Route::post('/home',[LoginController::class, 'logout'])->name('logout');
Route::get('/home', [HomeController::class, 'servicos'])->name('home');

// PERFIL
Route::get('/perfil', [PerfilController::class, 'perfil'])->name('perfil');

Route::get('/UpdatePerfil',[PerfilController::class, 'update'])->name('update');
Route::put('/UpdatePerfil',[PerfilController::class, 'edit'])->name('edit');
Route::get('/buscar-cep/{cep}', function ($cep) {
    $response = Http::get("https://viacep.com.br/ws/{$cep}/json/");

    if ($response->successful() && !isset($response['erro'])) {
        return response()->json($response->json());
    }
    return response()->json(['error' => 'CEP inválido'], 400);
});



// SERVICOS
Route::post('/servicos',[HomeController::class, 'servico'])->name('servico');
Route::get('/servicos',['\App\Http\Controllers\ServicosController','servicos'])->name('servicos');
Route::get('/criar-post',['\App\Http\Controllers\ServicosController','criar'])->name('criar');
Route::post('/criar-post',['\App\Http\Controllers\ServicosController','create'])->name('create');
Route::get('/servico/{id}',['\App\Http\Controllers\ServicosController','visualizar'])->name('servico.visualizar');
Route::get('/servico/editar/{id}',['\App\Http\Controllers\ServicosController','editar'])->name('servico.editar');
Route::put('/servico/editar/{id}',['\App\Http\Controllers\ServicosController','update'])->name('servico.update');
Route::delete('/servico/{id}',['\App\Http\Controllers\ServicosController','destroy'])->name('servico.destroy');



// USUARIOS
Route::get('/usuarios',[UsuarioController::class, 'apresentacao'])->name('usuarios');
Route::get('/usuario/visualizar/{id}',[UsuarioController::class,'visualizar'])->name('usuario.visualizar');
Route::get('/usuario/editar/{id}',[UsuarioController::class,'editar'])->name('usuario.editar');
Route::put('/usuario/editar/{id}',[UsuarioController::class,'update'])->name('usuario.update');
Route::delete('/usuario/{id}',[UsuarioController::class,'deletar'])->name('usuario.deletar');

});
