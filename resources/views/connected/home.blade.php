<h1> Bem vindo ao Bairro Melhor</h1>

<form action="{{route('logout')}}" method="post">
@csrf
<button type="submit">Sair</button></a>
</form>


<a href="{{route ('perfil')}}"><button type="button">Perfil</button></a>

<a href="{{route ('servicos')}}"><button type="button">Serviços</button></a>

<a href="{{route ('usuarios')}}"><button type="button">Usuarios</button></a>

<br>

<h2>Serviços</h2>
<table class="table">
    <thead>
        <tr>
            <th>Descrição do Serviço</th>
            <th>Status</th>
            <th>Data de Criação</th>
            <th>Última Vileira</th>
            <th>Ações</th>
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
                    <td>{{ $servico->Descricao_servico }}</td>
                    <td>{{ $servico->Status }}</td>
                    <td>{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($servico->data_criacao)->format('d/m/Y') }}</td>
                    <td><a href="{{route ('servico.visualizar', $servico->id)}}" class="btn btn-primary"><button>Visualizar</button></a></td>
                  
                </tr>
            @endforeach
        @endif
    </tbody>
</table>


<h2>Usuarios</h2>

    <table class="table">
    <thead>
        <tr>
            <th>Usuario</th>
            <th>Classificação</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->name }}</td>
                    <td>{{ $usuario->classificacao->tipo }}</td>
                    <td>{{ $usuario->telefone }}</td>
                    <td><a href=" {{route ('usuario.visualizar', $usuario->id)}}" class="btn btn-primary"><button>Visualizar</button></a></td>
                   
                </tr>
            @endforeach
        
    </tbody>
</table>
