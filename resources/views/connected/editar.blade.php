<style>
    .container{
        background-color: green;
    }
</style>

@section('content')
<div class="container">
    <h1>Perfil do Usuário</h1>

    <!-- Exibe mensagem de sucesso, se houver -->
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <form action="{{ route('edit') }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nome">Nome :</label>
    <input type="text" id="name" name="name" value="{{ $usuario->name }}">

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" value="{{ $usuario->email }}">

    <label for="telefone">Telefone :</label>
    <input type="tel" id="telefone" name="telefone" value="{{ $usuario->telefone }}" >

    <label for="data-nascimento">Data Nascimento : </label>
    <input type="date" id="Nascimento" name="Nascimento" value="{{ $usuario->Nascimento }}">

    <!-- Campos para edição do endereço -->
    <h2>Endereço</h2>

    <label for="rua">CEP:</label>
    <input type="text" id="CEP" name="CEP" value="{{ $usuario->endereco ? $usuario->endereco->CEP : '' }}">
    <button type="button" onclick="buscarEndereco()">Buscar</button>

    <label for="rua">Rua  :</label>
    <input type="text" id="Rua" name="Rua" value="{{ $usuario->endereco ? $usuario->endereco->Rua : '' }}">

    <label for="num_casa">Número :</label>
    <input type="text" id="Num_Casa" name="Num_Casa" value="{{ $usuario->endereco ? $usuario->endereco->Num_Casa : '' }}">

    <label for="complemento">Complemento :</label>
    <input type="text" id="Complemento" name="Complemento" value="{{ $usuario->endereco ? $usuario->endereco->Complemento : '' }}">

    <label for="cidade">Bairro:</label>
    <input type="text" id="bairro" name="bairro" value="{{ $usuario->endereco ? $usuario->endereco->bairro->bairro : '' }}">

    <label for="cidade">Cidade :</label>
    <input type="text" id="cidade" name="cidade" value="{{ $usuario->endereco ? $usuario->endereco->cidade->cidade : '' }}">

    <label for="estado">Estado :</label>
    <input type="text" id="sigla" name="sigla" value="{{ $usuario->endereco ? $usuario->endereco->uf->sigla : '' }}">

    <!-- Botão de enviar -->
    <button type="submit">Salvar Alterações</button>
    
    <a href="{{route ('perfil')}}"><button type="button">Voltar</button></a>

</form>

<script src="{{ asset('js/connected/apiCep.js') }}"></script>
