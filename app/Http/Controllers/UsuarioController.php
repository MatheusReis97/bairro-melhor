<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classificacao;
use Termwind\Components\BreakLine;

class UsuarioController extends Controller

{
    public function apresentacao(){

            $usuarios=User::OrderBy('id','desc')->paginate(20);
  

            return view('connected.usuarios',compact('usuarios'));
    }
    
    public function visualizar($id){
        

      
        // Recuperando o serviço com os dados relacionados
        $usuario = User::with(['endereco', 'classificacao'])->findOrFail($id);
    
        
        
        
        return view('connected.usuario.visualizar', compact('usuario'));
    
    } 



public function editar($id){
    

    // Recuperando o serviço com os dados relacionados
    $usuario = User::with([ 'endereco' ])->findOrFail($id);

    $classificacoes = Classificacao::all();
    // dd($servico->tpServico, $servico->endereco, $servico->user, $servico);
    
    return view('connected.usuario.editar', compact( 'usuario', 'classificacoes'));

}


public function update(Request $request, $id)
{   
    $validador = $request->validate([
        'nome' => 'required',
        'data_nascimento' => 'required',
        'email' => 'required',
        'endereco' => 'required',
        'CEP' => 'required',
        'bairro' => 'required',
        'classificacao' => 'required',
        'telefone' => 'required',
        'complemento' => 'required',
        'num_casa' => 'required'
    ]);

    $usuario = User::find($id);

        $usuario->update([
            'name' => $validador['nome'],
            'email' =>$validador['email'],
            'classificacao_id' =>$validador['classificacao'],
            'telefone' =>$validador['telefone'],
            'Nascimento' =>$validador['data_nascimento'],
        ]);

        $usuario->endereco->update([
            'Rua' => $request['endereco'],
            'CEP' => $request['CEP'],
            'bairro' => $request['bairro'],
            'Num_casa'=> $request['num_casa'],
            'Complemento' => $request ['complemento']
        ]);

        
   
    return redirect()->route('usuario.visualizar',$usuario->id)
        ->with('success', 'Usuario atualizado com sucesso!');
}


public function deletar($id)
{
// Busca o serviço pelo ID
$user = User::find($id);


if (!$user) {
    return redirect()->route('home')->with('error', 'Serviço não encontrado!');
}

// Deleta o serviço
$user->delete();

// Redireciona com mensagem de sucesso
return redirect()->route('home')->with('success', 'Serviço deletado com sucesso!');
}


public function BuscarUsuario(Request $request){

    $buscarUsuario = $request->input('buscar');
    $ValorSelecao = $request->input('selecao');

    $usuarios = User::query();

    switch($ValorSelecao){
        case 'name':
            $usuarios->where('name', 'LIKE', "%$buscarUsuario%");
            break;
        case 'email':
            $usuarios->where('email', 'LIKE', "%$buscarUsuario%");
            break;
        case 'telefone':
            $usuarios->where('telefone', 'LIKE', "%$buscarUsuario%");
            break;
        case 'Nascimento':
            $usuarios->where('Nascimento', 'LIKE', "%$buscarUsuario%");
            break;
        default:
            $usuarios->orderBy('created_at', 'desc');
         }


         $usuarios = $usuarios->paginate(10)->appends($request->query());;

         return view('connected.usuarios',compact('usuarios'));
}

}
