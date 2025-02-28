<div class="container">
    <h1> Visualizador de Serviço</h1>
</div>

<a href="{{route ('home')}}"><button type="button">Inicio</button></a>

<div>
<div>
    
    <label for="registro">ID serviço:</label>
    <p>{{ $servico->id ?? 'Não informado' }}</p> 
    <br>

    <label for="data">data de abertura do serviço:</label>
    <p> {{ \Carbon\Carbon::parse($servico->data_criacao ?? 'Não informado')->format('d/m/Y') }}</p>
    <br>

    <label for="tipo">Tipo de serviço:</label>
    <p>{{ $servico->tpServico->Tipo_Servico ?? 'Não informado' }}</p>
    <br>
    <label for="desc">Desc. do tipo de serviço:</label>
    <p>{{ $servico->tpServico->descricao ?? 'Não informado' }}</p>
    <br>
    <label for="Status">Descrição do serviço:</label>
    <p>{{ $servico->Status?? 'Não informado' }}</p>

    <br>
    <label for="desc">Descrição de serviço:</label>
    <p>{{ $servico->Descricao_servico ?? 'Não informado' }}</p>

    <br>
    <label for="endereco">Endereço:</label>
    <p>{{ $servico->endereco->Rua ?? 'Não informado' }}</p>
    <br>
    <label for="CEP">CEP:</label>
    <p>{{ $servico->endereco->CEP ?? 'Não informado' }}</p>
    <br>
    <label for="Bairro">Bairro:</label>
    <p>{{ $servico->endereco->bairro->bairro ?? 'Não informado' }}</p>
    <br>

    <label for="usuario">Usuário da abertura:</label>
    <p>{{ $servico->user->name ?? 'Não informado' }}</p>
    <br>

    <label for="usuario">Contato usuário:</label>
    <p>{{ $servico->user->telefone ?? 'Não informado' }}</p>

</div>


<a href="{{route ('servicos')}}"><button type="button">Voltar</button></a>

</div>