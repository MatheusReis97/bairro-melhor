<?php

namespace App\Http\Controllers;

use App\Models\Endereco;
use App\Models\User;
use App\Models\Uf;
use App\Models\Cidade;
use App\Models\Bairro;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class PerfilController extends Controller
{
    public function perfil(){

        $user = Auth::user();
        $usuario = User::with('endereco', 'Classificacao')->findOrFail($user->id);
       
       
        
        return view('connected.perfil',compact('usuario'));       
    }

    public function update(){

        $user = Auth::user();
        $usuario = User::with('endereco', 'Classificacao')->findOrFail($user->id);
       
       
        
        return view('connected.editar',compact('usuario'));    
    }

    public function edit(Request $request)
{
    // Carrega o usuário com os relacionamentos aninhados
    $user = $request->user()->load('endereco.bairro', 'endereco.cidade', 'endereco.uf');
    $usuario = User::with('endereco', 'Classificacao')->findOrFail($user->id);

    // Validação dos dados
    $validador = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'telefone' => 'nullable|string|max:16',
        'Nascimento' => 'nullable|date',
        'CEP' => 'nullable|string|max:12',
        'Rua' => 'nullable|string|max:255',
        'Num_Casa' => 'nullable|string|max:10',
        'Complemento' => 'nullable|string|max:100',
        'bairro' => 'nullable|string|max:100',
        'cidade' => 'nullable|string|max:255',
        'sigla' => 'nullable|string|max:2'
    ]);

    // Atualiza os dados do usuário
  

    // Verifica e cria endereço se não existir
    if (!$user->endereco) {
        $this->CriarEndereco($user, $request);
    } else {
        // Atualiza os dados do endereço existente
        $this->atualizarSeDiferente($user->endereco, $request, [
            'Rua', 'CEP', 'Num_Casa', 'Complemento', 'bairro', 'cidade', 'sigla'
        ]);
    }

    // Atualiza os dados do endereço
    if ($user->endereco) {
        $this->atualizarSeDiferente($user->endereco, $request, [
            'Rua', 'Num_Casa', 'CEP', 'complemento'
        ]);

        // Atualiza os dados do bairro (se existir)
        if ($user->endereco->bairro) {
            $this->atualizarSeDiferente($user->endereco->bairro, $request, [
                'bairro'
            ]);
        }

        // Atualiza os dados da cidade (se existir)
        if ($user->endereco->cidade) {
            $this->atualizarSeDiferente($user->endereco->cidade, $request, [
                'cidade'
            ]);
        }

        // Atualiza os dados da UF (se existir)
        if ($user->endereco->uf) {
            $this->atualizarSeDiferente($user->endereco->cidade->uf, $request, [
                'sigla'
            ]);
        }
    }


    $this->atualizarSeDiferente($user, $request, [
        'name', 'email', 'telefone', 'Nascimento'
       ]);

       return view('connected.perfil',compact('usuario'));    

}
private function atualizarSeDiferente($modelo, $request, array $campos)
{
    // Obtém os valores enviados, garantindo que todos os campos existam
    $dadosBanco = collect($modelo->only($campos))
    ->map(fn($value) => $value === '' ? null : (string) $value)
    ->toArray();

$dadosEnviados = collect($request->only($campos))
    ->map(fn($value) => $value === '' ? null : (string) $value)
    ->toArray();


    // Compara os dados enviados com os dados do banco
    $dadosDiferentes = array_diff_assoc($dadosEnviados, $dadosBanco);

    // Se houver diferenças, faz a atualização
    if (!empty($dadosDiferentes)) {
        $modelo->fill($dadosDiferentes)->save();
        Log::info("Dados atualizados na tabela " . $modelo->getTable(), ['dados' => $dadosDiferentes]);
    }

 
}


public function CriarEndereco($user , $request){
    $uf = Uf::firstOrCreate([
        'sigla' => $request->input('estado'),
        'nome' => $request->input('estado')
    ]);

    $cidade = Cidade::firstOrNew([
        'cidade' => $request->input('cidade'),
        'uf_id' => $uf->id,
    ]);
    
    // Verifica se a cidade já existe
    if (!$cidade->exists) {
        $cidade->save(); // Salva a nova cidade no banco de dados
    }

    $bairro = Bairro::firstOrCreate([
        'bairro' => $request->input('bairro'),
        'cidade_id' => $cidade->id,
    ]);

    $endereco = Endereco::create([
        'Rua' => $request->input('rua'),
        'Num_Casa' => $request->input('num_casa', ''),
        'CEP' => $request->input('cep', ''),
        'Complemento' => $request->input('complemento'),
        'bairro_id' => $bairro->id,
        'cidade_id' => $cidade->id,
        'uf_id' => $uf->id,
    ]);

    $user->endereco()->associate($endereco);
    $user->save();

}
}