<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bairro Melhor</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50 from-red-500 to-slate-50 bg-gradient-to-l">
    
<nav class="bg-sky-950 text-white">
    <div class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Links da Navbar -->
        <div class="flex gap-8">
            <a href="#Inicio" class="hover:text-sky-400 transition duration-300">Início</a>
            <a href="#Bairro" class="hover:text-sky-400 transition duration-300">Bairro</a>
        </div>

        <!-- Botões de Ação -->
        <div class="flex gap-4">
            <a href="{{route('inicio')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Voltar</a>
            <a href="{{route('login')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Acessar</a>
        </div>
    </div>
    </nav>
<div class="min-h-screen">
    <div class="bg-slate-100 text-justify p-6 m-4 shadow-xl rounded-lg max-w-7xl mx-auto ">
        <div class="mb-6" >
<h1 class="font-semibold text-2xl tracking-wide text-center text-sky-700">Cadastro de Usuário</h1>
        </div>

        <form action="{{route('cadastrando')}}" method="post" class="max-w-lg mx-auto p-6 bg-white rounded-lg shadow-lg space-y-6">
    @csrf
    <div>
        <label for="nome" class="block text-sm font-semibold text-gray-700">Nome:</label>
        <input type="text" id="nome" name="nome" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div>
        <label for="email" class="block text-sm font-semibold text-gray-700">Email:</label>
        <input type="email" id="email" name="email" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div>
        <label for="password" class="block text-sm font-semibold text-gray-700">Senha:</label>
        <input type="password" id="password" name="password" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div>
        <label for="telefone" class="block text-sm font-semibold text-gray-700">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" required placeholder="(xx) xxxxx-xxxx" class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div>
        <label for="data-nascimento" class="block text-sm font-semibold text-gray-700">Data de Nascimento:</label>
        <input type="date" id="data-nascimento" name="data-nascimento" required class="mt-1 block w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none">
    </div>

    <div class="flex justify-center">
        <button type="submit" class="w-full bg-blue-500 text-white py-3 rounded-lg text-lg hover:bg-blue-600 transition duration-300">
            Cadastrar
        </button>
    </div>
</form>

</div>
</div>
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

    <footer class="bg-slate-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p class="text-sm">
            &copy; {{ date('Y') }} |  Matheus Reis
        </p>
    </div>
</footer>
</body>
</html>