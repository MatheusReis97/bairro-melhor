@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Editar')

@section('conteudo')

<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex gap-8">
            <img class="shadow-md rounded-full box-border h-14 w-14 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
        </div>

        <div class="flex gap-4 mt-2">
            <a href="{{route ('perfil')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Perfil</button></a>
            <a href="{{route('home')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Dashboard</button></a>
            <form action="{{route('logout')}}" method="POST">
                @csrf
                <button type="submit" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">
                    Sair
                </button>
            </form>

        </div>
    </div>
</nav>

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto w-screen">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"> Editor de Serviço</h1>
    </div>

    <div>
        <div>
        <form action="{{ route('servico.update',  $servico->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-lg max-w-2xl mx-auto">
    @csrf
    @method('PUT')



    <div class="grid grid-cols-2 gap-4">
        <div>
            <label class="block text-lg font-semibold text-cyan-900">ID serviço:</label>
            <input type="text" value="{{ $servico->id ?? 'Não informado' }}" disabled class="w-full bg-gray-100 rounded-md p-2">
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">Data de abertura:</label>
            <input value="{{ \Carbon\Carbon::parse($servico->data_criacao ?? 'Não informado')->format('d/m/Y') }}" disabled class="w-full bg-gray-100 rounded-md p-2">
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">Previsão de encerramento:</label>
            <input value="{{ $servico->data_conclusao }}" name="data_conclusao" type="date" class="w-full border rounded-md p-2">
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">Tipo de serviço:</label>
            <select name="tipo" class="w-full border rounded-md p-2">
                <option value="{{ $servico->tpServico->id ?? '' }}">{{ $servico->tpServico->descricao ?? 'Não informado' }}</option>
                @foreach($tipoServicos as $tipoServico)
                    <option value="{{$tipoServico->id}}">{{$tipoServico->descricao}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">Status:</label>
            <select name="status" class="w-full border rounded-md p-2">
                <option value="{{ $servico->Status ?? '' }}">{{ $servico->Status ?? 'Não informado' }}</option>
                <option value="Em andamento">Em andamento</option>
                <option value="Concluido">Concluído</option>
            </select>
        </div>
    </div>

    <div class="mt-4">
        <label class="block text-lg font-semibold text-cyan-900">Descrição:</label>
        <textarea name="descricao" class="w-full border rounded-md p-2">{{ $servico->Descricao_servico ?? 'Não informado' }}</textarea>
    </div>

    <div class="grid grid-cols-3 gap-4 mt-4">
        <div>
            <label class="block text-lg font-semibold text-cyan-900">Endereço:</label>
            <input name="Endereco" value="{{ $servico->endereco->Rua ?? 'Não informado' }}" class="w-full border rounded-md p-2">
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">CEP:</label>
            <input name="CEP" value="{{ $servico->endereco->CEP ?? 'Não informado' }}" class="w-full border rounded-md p-2">
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">Bairro:</label>
            <input name="bairro" value="{{ $servico->endereco->bairro->bairro ?? 'Não informado' }}" class="w-full border rounded-md p-2">
        </div>
    </div>

    <div class="grid grid-cols-2 gap-4 mt-4">
        <div>
            <label class="block text-lg font-semibold text-cyan-900">Usuário da abertura:</label>
            <input value="{{ $servico->user->name ?? 'Não informado' }}" disabled class="w-full bg-gray-100 rounded-md p-2">
        </div>

        <div>
            <label class="block text-lg font-semibold text-cyan-900">Contato do usuário:</label>
            <input value="{{ $servico->user->telefone ?? 'Não informado' }}" disabled class="w-full bg-gray-100 rounded-md p-2">
        </div>
    </div>

    <div class="flex justify-end gap-4 mt-6">
    <a href="{{route ('servicos')}}"><button type="button" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Voltar</button></a>

        <button type="submit" class="bg-green-500 hover:bg-green-600 text-white rounded-md px-6 py-2 transition-transform duration-300 transform hover:scale-105">Salvar Alterações</button>
        
        <form action="{{ route('servico.destroy', $servico->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="bg-red-500 hover:bg-red-600 text-white rounded-md px-6 py-2 transition-transform duration-300 transform hover:scale-105">Excluir</button>

           
        </form>
    </div>
</form>

            <br>
        </div>


       

    </div>
</div>