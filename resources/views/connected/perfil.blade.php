

@section('content')
<div class="container">
    <h1>Perfil do Usuário</h1>

    <!-- Exibe mensagem de sucesso, se houver -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
<!-- Exibindo informações básicas do usuário -->
 <img src="{{ $usuario->imagem_url }}" alt="imagem Perfil">
<h1>{{ $usuario->name }}</h1>
@if($usuario->Classificao)
<h1>{{ $usuario->Classificacao->tipo}}</h1>
@else
<h1> - </h1>
@endif
<p>Email: {{ $usuario->email }}</p>
<p>Data Nascimento: {{ $usuario->Nascimento }}</p>
<p>Telefone: {{ $usuario->telefone }}</p>

<!-- Exibindo informações do endereço, se existir -->
@if($usuario->endereco)
    <h2>Endereço:</h2>
    <p>Rua: {{ $usuario->endereco->Rua }}</p>
    <p>Numero: {{ $usuario->endereco->Num_Casa }}</p>
    <p>Complemento: {{ $usuario->endereco->Complemento }}</p>
    <p>Cidade: {{ $usuario->endereco->cidade->cidade }}</p>
    <p>Estado: {{ $usuario->endereco->uf->nome }}</p>
@else   
    <h2>Endereço:</h2>
    <p>Rua:- </p>
    <p>Numero:- </p>
    <p>Complemento: - </p>
    <p>Cidade:- </p>
    <p>Estado: - </p>
@endif


<a href="{{route ('update')}}"><button type="button">Editar</button></a>
<a href="{{route ('home')}}"><button type="button">Voltar</button></a>


