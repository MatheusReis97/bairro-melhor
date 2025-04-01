@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Home')

@section('conteudo')

@section('content')

@include('pattern.navbar')

<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto">
    <div class="mb-6">
        <h1 class="font-semibold text-4xl tracking-wide text-center text-sky-700"> Bem vindo ao Bairro Melhor</h1>
    </div>

    <br>

    <div class="flex flex-col md:flex-row items-start justify-center space-x-4 p-4">
        <!-- Tabela de Serviços -->
        <div class="flex-1  p-4 rounded-lg shadow-lg">
            <div class="flex  bg-slate-200 text-center justify-between w-full mb-1 p-2">
                <h2 class="font-black text-xl tracking-wide mb-2 mt-2">SERVIÇOS</h2>
                <div class="flex gap-4">
                    <a href="{{route('criar')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Criar novo</a>
                    <a href="{{route('servicos')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Visualizar todos</a>
                </div>
            </div>

            <table class="border-separate border-spacing-2 border border-slate-400 w-full text-center bg-gray-50">
                <thead>
                    <tr>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Descrição do Serviço</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Status</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Data de Criação</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Última Vileira</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($servicos->isEmpty())
                    <tr>
                        <td colspan="5">Nenhum serviço encontrado.</td>
                    </tr>
                    @else
                    @foreach ($servicos as $servico)
                    <tr>
                        <td class="border border-slate-300 p-3 min-w-[12px] min-h-[12px]">{{ \Illuminate\Support\Str::limit($servico->Descricao_servico, 25, '...') }}</td>
                        <td class="border border-slate-300 p-1">{{ $servico->Status }}</td>
                        <td class="border border-slate-300 p-1">{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                        <td class="border border-slate-300 p-1">{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                        <td class=" p-1">
                            <a href="{{route('servico.visualizar', $servico->id)}}" class="bg-green-400 hover:bg-green-700 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Visualizar</a>
                        </td>
                    </tr>
                    <tr class="h-1"></tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>

        @if (auth()->user()->classificacao_id === 2)
       
        <!-- Tabela de Usuários -->
        <div class="flex-1 bg-slate-200 p-4 rounded-lg shadow-lg">
            <div class="flex  bg-slate-300 text-center justify-between w-full mb-1 p-2">
                <h2 class="font-black text-xl tracking-wide mb-2 mt-2">USUÁRIOS</h2>
                <a href="{{route('usuarios')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Visualizar todos</a>
            </div>

            <table class="border-separate border-spacing-2 border border-slate-400 w-full text-center">
                <thead>
                    <tr>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Usuário</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Classificação</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Telefone</th>
                        <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Ações</th>
                    </tr>
                   
                </thead>
                <tbody  class="space-y-4">
                    @foreach ($usuarios as $usuario)
                    <tr >
                        <td class="border border-slate-300 p-1">{{ $usuario->name }}</td>
                        <td class="border border-slate-300 p-1">{{ $usuario->classificacao->tipo }}</td>
                        <td class="border border-slate-300 p-1">{{ $usuario->telefone }}</td>
                        <td class="">
                            <a href="{{route('usuario.visualizar', $usuario->id)}}" class="bg-green-400 hover:bg-green-700 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Visualizar</a>
                        </td>
                    </tr>
                    <tr class="h-1"></tr>
                    
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</div>


</body>