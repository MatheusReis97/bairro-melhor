@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Visualizar')

@section('conteudo')

@include('pattern.navbar')


<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600"> Visualizador de Serviço</h1>
    </div>



    <div>
    <div class="bg-white p-6 rounded-lg shadow-lg max-w-5xl mx-auto">

<div class="grid grid-cols-3 gap-6">

    <div class="col-span-1">
        <label for="registro" class="block text-lg font-semibold text-cyan-900">ID serviço:</label>
        <p class="w-full bg-gray-100 rounded-md p-3">{{ $servico->id ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-1">
        <label for="data" class="block text-lg font-semibold text-cyan-900">Data de abertura:</label>
        <p class="w-full bg-gray-100 rounded-md p-3">{{ \Carbon\Carbon::parse($servico->data_criacao ?? 'Não informado')->format('d/m/Y') }}</p>
    </div>

    <div class="col-span-1">
        <label for="tipo" class="block text-lg font-semibold text-cyan-900">Tipo de serviço:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->tpServico->Tipo_Servico ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-3">
        <label for="desc" class="block text-lg font-semibold text-cyan-900">Desc. do tipo:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->tpServico->descricao ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-1">
        <label for="Status" class="block text-lg font-semibold text-cyan-900">Status:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->Status ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-3">
        <label for="desc" class="block text-lg font-semibold text-cyan-900">Descrição de serviço:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->Descricao_servico ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-1">
        <label for="endereco" class="block text-lg font-semibold text-cyan-900">Endereço:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->endereco->Rua ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-1">
        <label for="CEP" class="block text-lg font-semibold text-cyan-900">CEP:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->endereco->CEP ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-1">
        <label for="Bairro" class="block text-lg font-semibold text-cyan-900">Bairro:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->endereco->bairro->bairro ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-1">
        <label for="usuario" class="block text-lg font-semibold text-cyan-900">Usuário da abertura:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->user->name ?? 'Não informado' }}</p>
    </div>

    <div class="col-span-2">
        <label for="usuario" class="block text-lg font-semibold text-cyan-900">Contato usuário:</label>
        <p class="w-full bg-gray-100 border rounded-md p-3">{{ $servico->user->telefone ?? 'Não informado' }}</p>
    </div>
</div>
</div>




            <div>
                <a href="{{route ('servicos')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105"><button type="button">Voltar</button></a>
            </div>
        </div>
    </div>
</div>
</div>

<div class="">
</div>

@endsection