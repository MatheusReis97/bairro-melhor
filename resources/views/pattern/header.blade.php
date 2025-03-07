<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('titulo')</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />


    </head>
        
        
<body class="flex flex-col  min-h-screen font-sans antialiased dark:bg-black dark:text-white/50 from-cyan-800 to-slate-50 bg-gradient-to-l">

    <main  class="flex-grow">
    @yield('conteudo')
    </main>

   
<footer class="bg-slate-800 text-white py-4 mt-auto">
    <div class="container mx-auto text-center">
        <p class="text-sm">
            &copy; {{ date('Y') }} | Matheus Reis
        </p>
    </div>
</footer>
</body>