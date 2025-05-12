<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">

        <div class="flex gap-8">
            <img class="shadow-md rounded-full box-border h-14 w-14 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
        </div>

        <div class="flex gap-4 mt-2">

        <p class="gap-4 mt-2">Bem Vindo - {{auth()->user()->name}}</p>

        <a href="{{route('home')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Inicio</button></a>
        @if (auth()->user()->classificacao_id != 1)
            <a href="{{route('home')}}"><button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Dashboard</button></a>
            @endif
            <a href="{{route ('perfil')}}"> <button class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Perfil</button></a>
            <form action="{{route('logout')}}" method="post">
                @csrf
                <button href="{{route('logout')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Sair</button>
            </form>
        </div>
    </div>
</nav>


