<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bairro Melhor</title>
</head>
<body>
    <h1>Cadastro Bairro Melhor</h1>
    <form action="{{route('cadastrando')}}" method="post">
        @csrf
        <label for="nome">Nome :</label>
        <input type="text" id="nome" name="nome" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Senha :</label>
        <input type="password" id="password" name="password" required>

        <label for="telefone">Telefone :</label>
        <input type="tel" id="telefone" name="telefone" required placeholder="(xx) xxxxx-xxxx" >

        <label for="data-nascimento">Data Nascimento : </label>
        <input type="date" id="data-nascimento" name="data-nascimento" required>


        <button type="submit">Cadastrar</button>
    </form> 


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
    @endif


    <div>
    <a href="{{route('logar')}}"><button>Acessar</button></a>
    <a href="{{route('inicio')}}"><button>Voltar</button></a>

    </div>
</body>
</html>