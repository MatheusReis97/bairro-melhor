@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Usuários')

@section('conteudo')

@section('content')

@include('pattern.navbar')

<div class="bg-slate-300 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto w-screen">
    <div class="mb-6">
        <h1 class="font-semibold text-3xl tracking-wide text-center text-sky-600">Usuarios</h1>
    </div>

    <form action="{{route ('usuario.busca')}}" method="GET" class="mb-4 flex gap-2">
        <label for="Buscar">Buscar: </label>
        <input type="text" id="buscar" name="buscar">

        <select name="selecao" id="selecao">
            <option value="name">Nome</option>
            <option value="email">Email</option>
            <option value="telefone">Telefone</option>
            <option value="Nascimento">Data Nascimento</option>
        </select>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Buscar</button>
    </form>

    <table class="w-full text-center col-end-2">
        <thead>
            <tr>
                <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Usuário</th>
                <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Classificação</th>
                <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Telefone</th>
                <th class="border border-slate-700 p-3 font-mono font-bold tracking-wide">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td class="border border-slate-100 p-1">{{ $usuario->name }}</td>
                <td class="border border-slate-100 p-1">{{ $usuario->classificacao->tipo }}</td>
                <td class="border border-slate-100 p-1">{{ $usuario->telefone }}</td>
                <td class="border border-slate-100 p-1">
                    <div class="p-2 m-2">
                        <a href=" {{route ('usuario.visualizar', $usuario->id)}}" class="bg-green-400 hover:bg-green-700 text-white rounded-md mt-2 p-3 transition-transform duration-300 transform hover:scale-105 "><button>Visualizar</button></a>
                </td>


</div>
</tr>

@endforeach

</tbody>
<!-- Exibir links para navegação com Tailwind -->
<div class="mt-4">
    {{ $usuarios->links('pagination::tailwind') }}
</div>
</table>
</div>

<div class="gap-2 flex ml-4">
    <a href="{{route ('home')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105"><button type="button">Voltar</button></a>

    <a href="{{route ('servicos')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105"><button type="button">Serviços</button></a>

</div>