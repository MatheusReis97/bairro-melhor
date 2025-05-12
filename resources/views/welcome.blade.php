<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bairro Melhor</title>
        @vite('resources/css/app.css')
        <!-- Fonts -->
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
            <a href="{{route('cadastrar')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Cadastrar</a>
            <a href="{{route('login')}}" class="bg-sky-500 hover:bg-sky-600 text-white rounded-md px-4 py-2 transition-transform duration-300 transform hover:scale-105">Acessar</a>
        </div>
    </div>
    </nav>

     <div class="md:container md:mx-auto flex justify-center items-center px-4 pt-4 h-80">
    <img class="shadow-md rounded-full box-border h-80 w-80 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
    </div>

    <br>
    <hr class="">
    
    <div class="bg-slate-100 text-justify p-6 m-4 shadow-xl rounded-lg max-w-7xl mx-auto">
    <div class="mb-6">
        <h2 class="font-semibold text-2xl tracking-wide text-center text-sky-700">
            Sobre a Ilha Caraguatá: Um Lugar de História, Cultura e Comunidade
        </h2>  
    </div>

    
    <div class="flex flex-col md:flex-row items-center gap-6 mb-2">
        <img class="shadow-sm rounded-lg h-48 w-48 object-cover" src="{{asset('img/historia-ilha.jpg')}}" alt="História da Ilha Caraguatá">
        <p class="font-serif text-lg leading-relaxed">
            A Ilha Caraguatá é mais do que um simples bairro — é um símbolo de resistência, tradição e comunidade. Localizada em Cubatão - SP, essa região tem suas raízes fincadas na história local, com uma população que sempre se destacou pela força de vontade e pelo desejo de construir um ambiente melhor para todos. Entre suas ruas simples e suas paisagens cercadas pela natureza, encontramos não apenas casas, mas lares cheios de histórias, sonhos e esperanças.
        </p>
    </div>

    
    <div class="flex flex-col-reverse md:flex-row items-center gap-6">
        <p class="font-serif text-lg leading-relaxed">
            Aqui, cada esquina carrega memórias, e cada morador tem um papel fundamental nessa construção coletiva. A Ilha Caraguatá é feita de gente que acredita na mudança, que valoriza o trabalho em equipe e que, acima de tudo, tem orgulho de suas origens. Por isso, cuidar desse bairro é mais do que uma necessidade — é um compromisso com o presente e com o futuro.
        </p>
        <img class="shadow-sm rounded-lg h-48 w-48 object-cover" src="{{asset('img/bairro-ilha.jpg')}}" alt="Bairro Ilha Caraguatá">
    </div>
</div>


    <hr>

    
    <div class="bg-slate-100 text-justify p-6 m-4 shadow-xl rounded-lg max-w-7xl mx-auto">
        <div class="mb-6">
            <h2 class="font-semibold text-2xl tracking-wide text-center text-sky-700"
            > Por que Criamos o Projeto Bairro Melhor?</h2>  
        </div>
        <div class="items-center gap-6 mb-2">
        <p class="font-serif text-lg leading-relaxed"> O site "Bairro Melhor" nasceu da necessidade de dar voz à comunidade da Ilha Caraguatá. Sabemos que ninguém conhece melhor as necessidades e os potenciais de um bairro do que seus próprios moradores. Por isso, este espaço foi criado para ouvir, debater e, principalmente, transformar ideias em ações.</p>
        <p class="font-serif text-lg leading-relaxed" >Aqui, você pode sugerir melhorias, relatar problemas, propor soluções e acompanhar de perto cada passo das mudanças que queremos ver. É um canal direto entre a população, os organizadores e os prestadores de serviço, garantindo que cada decisão seja tomada com base nas reais demandas do bairro.</p>
        <p class="font-serif text-lg leading-relaxed"> Nosso objetivo vai além de simplesmente listar problemas — queremos construir juntos. Cada sugestão, cada comentário e cada iniciativa são peças essenciais para transformar a Ilha Caraguatá em um lugar melhor para todos. E, para isso, contamos com você!</p>
        </div>
    </div>

    <hr>


    <div class="bg-slate-100 text-justify p-6 m-4 shadow-xl rounded-lg max-w-7xl mx-auto">
        <div class="mb-6"> 
            <h2  class="font-semibold text-2xl tracking-wide text-center text-sky-700">Junte-se a Nós nessa Transformação!</h2>  
        </div>
        <div class="items-center gap-6 mb-2">
            <p class="font-serif text-lg leading-relaxed">Acreditamos que mudanças reais acontecem quando todos se envolvem. Por isso, sua participação é fundamental. Compartilhe suas ideias, ajude a divulgar o projeto, acompanhe as iniciativas em andamento e, sempre que possível, coloque a mão na massa.</p>
            <p class="font-serif text-lg leading-relaxed"> A Ilha Caraguatá tem um potencial gigantesco, e juntos podemos fazer desse bairro um exemplo de organização, colaboração e desenvolvimento. Vamos construir, melhorar e transformar — um passo de cada vez, mas sempre na direção certa.</p>

            <div class="flex justify-center items-center gap-4">
            <img class="shadow-md rounded-full box-border h-80 w-80 p-2"  src="{{asset('img/ILha caraguatá.png')}}" alt="">
            <img  class="shadow-md rounded-full box-border h-80 w-80 p-2" src="{{asset('img/associacaoIlha.jpeg')}}" alt="">
            <img class="shadow-md rounded-full box-border h-80 w-80 p-2" src="{{asset('img/bairro-melhor-logo.png')}}" alt="logo-Bairro-Melhor">
            </div>
        </div>
    </div>

    <footer class="bg-slate-800 text-white py-4">
    <div class="container mx-auto text-center">
        <p class="text-sm">
            &copy; {{ date('Y') }} |  Matheus Reis
        </p>
    </div>
</footer>

    </body>
</html>
