<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Endereco;
use Illuminate\Http\Request;
use App\Models\Servico;
use App\Models\TpServico;
use app\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Symfony\Contracts\Service\Attribute\Required;

class ServicosController extends Controller
{
    
    public function servicos(){

        $servicos = Servico::paginate(15);
       
        // Retorna para a view com os usuários
       return view('connected.servicos', compact('servicos'));
   
       }

    public function criar(){

        $tipoServicos = TpServico::all();
        $enderecos = Endereco::all();
        $servicos = Servico::all();
       

        return view('connected.servico.criar', compact('tipoServicos', 'enderecos', 'servicos'));
    }


    public function create(Request $request){

        $user = Auth::user();
        $usuario = User::findOrfail($user->id);
        $tipoServicos = TpServico::all();
        $enderecos = Endereco::all();

        

        $validador = $request->validate([
            'desc' => 'required|string|max:300',
            'tipo' => 'required', 
            'data' => 'nullable',
            'Endereco'=>'required', 
        ]);

      
     
        $servico = Servico::create([
       'Descricao_servico' => $validador['desc'],
        'data_criacao' => $validador['data']?? now(),
        'data_conclusao' => Carbon::now()->addDays(30),
        'endereco_id' => $validador['Endereco'],
        'tp_servico_id'=> $validador['tipo'],
        'users_id' => $usuario->id,
        ]);

       
        
        return redirect()->route('servicos');
    }

    public function visualizar($id){
        

            // Recuperando o serviço com os dados relacionados
            $servico = Servico::with(['endereco', 'user', 'tpServico' , 'endereco' ])->findOrFail($id);
        
    
            // dd($servico->tpServico, $servico->endereco, $servico->user, $servico);
            
            return view('connected.servico.visualizar', compact('servico'));
        
    } 



    public function editar($id){
        

        // Recuperando o serviço com os dados relacionados
        $servico = Servico::with(['endereco', 'user', 'tpServico' , 'endereco' ])->findOrFail($id);
    
        $tipoServicos = TpServico::all();
        // dd($servico->tpServico, $servico->endereco, $servico->user, $servico);
        
        return view('connected.servico.editar', compact('servico', 'tipoServicos'));
    
    }
    
    
    public function update(Request $request, $id)
    {
        //  dd($request->all());
        

            $validatedData = $request->validate([
                'tipo' => 'required', 
                'status' => 'required',
                'descricao' => 'required', 
                'Endereco' => 'required',  
                'bairro' => 'required',  
                'CEP'=> 'required',
                'bairro' => 'required',
                
            ]);
        
            $servico = Servico::find($id);
        
       

        $servico->update([
            'tp_servico_id' => $request->tipo,
            'Status' => $request->status,
            'Descricao_servico' => $request->descricao,
        ]);
    
        
        $servico->endereco->update([
            'Rua' => $request->Endereco,
            'CEP' => $request->CEP,
            'bairro' => $request->bairro,
        ]);
        
        $servico->save();
       
        return redirect()->route('servico.visualizar', ['id' => $id])
            ->with('success', 'Serviço atualizado com sucesso!');
    }
    

    public function destroy($id)
{
    // Busca o serviço pelo ID
    $servico = Servico::find($id);

  
    if (!$servico) {
        return redirect()->route('servicos')->with('error', 'Serviço não encontrado!');
    }

    // Deleta o serviço
    $servico->delete();

    // Redireciona com mensagem de sucesso
    return redirect()->route('servicos')->with('success', 'Serviço deletado com sucesso!');
}


public function ordenar(Request $request)
{
    $escolha = $request->input('ordenacao','recentes');

    $filtroStatus = $request->input('status','');

    $servicos =Servico::query();

    if(!empty($filtroStatus)){
        $servicos->where('Status', $filtroStatus);
    }


    switch ($escolha) {
        case 'antigos':
            $servicos->orderBy('created_at', 'asc');
            break;
        default:
            $servicos->orderBy('created_at', 'desc'); // Padrão: Mais recentes
    }

    $servicos = $servicos->paginate(10)->appends($request->query());; // Mantém paginação

    return view('connected.servicos', compact('servicos'));

}

public function MeuServicos(Session $session){

   $Idusuario =auth()->id();
   $servicos = Servico::where('users_id', $Idusuario)->paginate(10);

   return view('connected.servicos', compact('servicos'));

}

 }
