@extends('pattern.header')

@section('titulo', 'Bairro Melhor - Visualizar')

@section('conteudo')

<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex gap-8">
            <img class="shadow-md rounded-full box-border h-14 w-14 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
        </div>

        <div class="flex gap-4">
            <a href="{{route ('perfil')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Perfil</a>
            <a href="{{route('home')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Dashboard</a>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button href="{{route('logout')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Sair</button>
        </div>
    </div>
</nav>


<div class="bg-slate-100 text-justify p-7 m-6 shadow-xl rounded-lg  mx-auto">
    <div class="mb-6">
        <h1 class="font-semibold text-2xl tracking-wide text-center text-sky-600"> Visualizador de Serviço</h1>
    </div>



    <div>
        <div>

        <div class="grid grid-cols-3 gap-3">

            <div class="col-start-2 col-span-1 flex align-center bg-slate-200 p-2 m-3 ">
                <label for="registro" class="mt-1 p-2 block text-xl font-semibold text-cyan-900">ID serviço:</label>
                <p class="p-3 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->id ?? 'Não informado' }}</p>
            </div>

        
                <div class="col-start-1">
                    <label for="data" class="block text-xl font-semibold text-cyan-900">data de abertura do serviço:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center text-lg"> {{ \Carbon\Carbon::parse($servico->data_criacao ?? 'Não informado')->format('d/m/Y') }}</p>
                </div>


                <div>
                    <label for="tipo" class="block text-xl font-semibold text-cyan-900">Tipo de serviço:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center text-lg">{{ $servico->tpServico->Tipo_Servico ?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="desc" class="block text-xl font-semibold text-cyan-900">Desc. do tipo de serviço:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->tpServico->descricao ?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="Status" class="block text-xl font-semibold text-cyan-900">Descrição do serviço:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->Status?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="desc" class="block text-xl font-semibold text-cyan-900">Descrição de serviço:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->Descricao_servico ?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="endereco" class="block text-xl font-semibold text-cyan-900">Endereço:</label>
                    <p class="p-auto m-2 border w-auto border-cyan-900 rounded-lg text-center">{{ $servico->endereco->Rua ?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="CEP" class="block text-xl font-semibold text-cyan-900">CEP:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->endereco->CEP ?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="Bairro" class="block text-xl font-semibold text-cyan-900">Bairro:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->endereco->bairro->bairro ?? 'Não informado' }}</p>
                </div>


                <div>
                    <label for="usuario" class="block text-xl font-semibold text-cyan-900">Usuário da abertura:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->user->name ?? 'Não informado' }}</p>
                </div>


                <div class="col-end-4 col-span-1 ">
                    <label for="usuario" class="block text-xl font-semibold text-cyan-900">Contato usuário:</label>
                    <p class="p-auto m-2 border w-full max-w-96 border-cyan-900 rounded-lg text-center">{{ $servico->user->telefone ?? 'Não informado' }}</p>
                </div>
            </div>
            <br>



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