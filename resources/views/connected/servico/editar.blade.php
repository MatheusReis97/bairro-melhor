<div class="container">
    <h1> Editor de Serviço</h1>
</div>

<a href="{{route ('home')}}"><button type="button">Inicio</button></a>

<div>
<div>
<form action="{{ route('servico.update',  $servico->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="registro">ID serviço:</label>
    <input type="text" value="{{ $servico->id ?? 'Não informado' }}" disabled >
    <br>

    <label for="data">data de abertura do serviço:</label>
    <input value= "{{ \Carbon\Carbon::parse($servico->data_criacao ?? 'Não informado')->format('d/m/Y') }}" id=data_criacao disabled >
    <br>
    
    <label for="data">Provavel encerramento do serviço:</label>
    <input value="{{ $servico->data_conclusao }}" id="data_conclusao" name="data_conclusao" type="date">
    <br>

    <label for="desc">Desc. do tipo de serviço:</label>
    <select id="tipo" name="tipo">
        <option value="{{ $servico->tpServico->id ?? 'Não informado' }}">{{ $servico->tpServico->descricao ?? 'Não informado' }}</option>
        @foreach($tipoServicos as $tipoServico)
        <option value="{{$tipoServico->id}}">{{$tipoServico->descricao}}</option>
         @endforeach
    </select>

    <br>
    <label for="Status">Descrição do serviço:</label>
    <select id="status" name="status">
      <option value="{{ $servico->Status?? 'Não informado' }}">{{ $servico->Status?? 'Não informado' }} </option>
      <option value="Em andamento">Em andamento</option>
      <option value="Concluido">Concluido</option>
    </select>

    <br>
    <label for="desc">Descrição de serviço:</label>
    <textarea name="descricao" id="descricao">{{ $servico->Descricao_servico ?? 'Não informado' }}</textarea>

    <br>
    <label for="endereco">Endereço:</label>
    <input id="Endereco" name="Endereco" value="{{ $servico->endereco->Rua ?? 'Não informado' }}">
    <br>
    <label for="CEP">CEP:</label>
    <input id="CEP" name="CEP" value="{{ $servico->endereco->CEP ?? 'Não informado' }}">
    <br>
    <label for="Bairro">Bairro:</label>
    <input  id="bairro" name="bairro"  value="{{ $servico->endereco->bairro->bairro ?? 'Não informado' }}">

    <label for="usuario">Usuário da abertura:</label>
    <input id="user" name="user" value="{{ $servico->user->name ?? 'Não informado'}}" disabled> 
    <br>
    <label for="usuario">Contato usuário:</label>
    <input id="telefone" name="telefone" value="{{ $servico->user->telefone ?? 'Não informado' }}" disabled>
<br>
    <button type="submit">Salvar Alterações</button>


    <form action="{{route ('servico.destroy', $servico->id)}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Excluir</button>
                        </form>
                        
    </form>
    <br>
</div>


<a href="{{route ('servicos')}}"><button type="button">Voltar</button></a>

</div>