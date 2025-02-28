<form action="{{route('Login')}}" method="post">
@csrf
    <label for="login">Login :</label>
    <input type="email" name="email" id="email">

    <label for="Senha"> Senha : </label>
    <input type="password" name="password" id="password">
    <button type="submit">Entrar</button>
</form>

<!-- Exibe mensagens de erro -->
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div>
   
    <a href="{{route('inicio')}}"><button>Voltar</button></a>

</div>