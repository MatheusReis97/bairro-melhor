<h1 align="center">Bairro Melhor</h1>

###

<h3 align="left">📖 Sobre o Projeto</h3>

###

<p align="center">O Bairro Melhor foi criado com o objetivo de facilitar a gestão e a organização das melhorias no bairro. A plataforma permite que moradores registrem solicitações de melhorias, organizadores acompanhem o andamento das tarefas e prestadores de serviço executem as ações necessárias de forma estruturada.<br><br>Com essa ferramenta, buscamos centralizar todas as demandas do bairro em um único ambiente digital, proporcionando maior transparência, eficiência e colaboração entre a comunidade e os responsáveis pela execução das melhorias. Além disso, o sistema oferece um controle detalhado sobre as tarefas em andamento, concluídas e pendentes, garantindo que cada solicitação receba a devida atenção.</p>

###

<h3 align="left">🎯 Objetivo</h3>

###

<p align="left">O sistema visa facilitar a comunicação entre a comunidade e os responsáveis pelas melhorias no bairro. Através dele, é possível:<br><br>
- Registrar e categorizar tarefas, como por exemplo, reparos, limpeza e outras ações importantes.<br>
- Acompanhar o status das tarefas (aberto, em andamento, concluído), garantindo maior transparência.<br>
- Incluir informações sobre o local (bairro, rua, etc.) e o tipo de tarefa, permitindo que os responsáveis se planejem melhor.<br>
- Atribuir tarefas aos prestadores de serviços e gerenciar a conclusão das ações, promovendo a eficiência no processo.</p><br>

###

<h3 align="left">🚀 Tecnologias Utilizadas</h3>

####

<br clear="both">

- Laravel :  para o back-end, utilizando os recursos mais recentes como Eloquent ORM e Blade templates.<br><br>
-  MySQL : como banco de dados para armazenar as informações.<br><br>
- Docker e Docker Compose : para containerização e fácil configuração do ambiente.<br><br>
- Tailwind CSS :  para a parte visual, criando uma interface moderna e responsiva.

###

<div align="center">
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/laravel/laravel-original.svg" height="45" alt="laravel logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" height="45" alt="php logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" height="45" alt="javascript logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" height="45" alt="mysql logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/docker/docker-original.svg" height="45" alt="docker logo"  />
  <img width="12" />
  <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/tailwindcss/tailwindcss-original-wordmark.svg" height="45" alt="tailwindcss logo"  />
</div>
<br>

###

<h3 align="left">📥 Instalação e Configuração</h3>

###

<h4 align="left">📋 Pré-requisitos</h4>

###

- Docker e Docker Compose instalados no seu sistema.<br><br>
- Visual Studio Code configurado.<br><br>
- Extensão do Docker no VS Code (opcional, mas recomendada para facilitar o gerenciamento dos containers).</p><br><br>

###

<h4 align="left">🛠️ Passos para Instalação</h4>

###

<p align="left"><strong>1 - Clonando o Repositório</p></strong>

###

<p align="left">Primeiro, clone o repositório em sua máquina local através do terminal:</p><br>

```bash
    git clone https://github.com/MatheusReis97/bairro-melhor

    cd bairro-melhor
```

###

<p align="left"><strong>2 - Subindo os Containers</p></strong>

###

<p align="left">Após ter o repositório clonado, utilize o Docker Compose para rodar os containers. O comando abaixo cria e inicia os containers definidos no arquivo docker-compose.yml:</p>

###

<p align="left">⚠️ Aviso sobre Containers em Produção</p>

###

<p align="left">Importante: Antes de rodar o proximo comando, verifique se não há containers em execução utilizando as mesmas portas ou banco de dados que possam gerar conflitos.</p>
   
```bash 
docker-compose up -d 
```
    
###

<p align="left">Para listar os containers ativos, use o seguinte comando:<br><br>docker ps<br><br>Se você encontrar containers em execução e precisar parar algum deles, utilize o comando:</p>

```bash  
docker stop nome-do-container
```

###

<p align="left"><strong>3 - Acessar o container da aplicação</p></strong>

###

```bash
docker-compose exec app bash
```

<p align="left">Caso o seu ambiente não tenha bash, use:</p>
  
  ```bash 
docker-compose exec app sh
```

###

<p align="left"><strong>4 - Configurar variáveis de ambiente</strong>

<p align="left">Se ainda não existir o arquivo .env, copie o modelo:</p>

```bash
cp .env.example .env  
```

 <p align="left">O Laravel usa um arquivo .env para armazenar configurações sensíveis, como credenciais do banco de dados. Esse comando copia o modelo .env.example para .env.</p>

###

<p align="left"><strong>5 - Gerar a chave da aplicação</p></strong>

###

```bash
php artisan key:generate
 ```

###

<p align="left">O Laravel usa uma chave única para criptografar dados internos, como senhas e sessões. Esse comando gera e define essa chave no .env.</p>

###

<p align="left"><strong>6 - Rodar as migrations e seeders</p></strong>

###
```bash
php artisan migrate --seed
 ```
    
###

<p align="left">As migrations criam as tabelas no banco de dados conforme o esquema definido no código.<br>As seeders inserem dados iniciais (como usuários padrão ou permissões) para facilitar o desenvolvimento e testes.</p>

###

<p align="left"><strong>7 -  Rodar o Vite (para usar Tailwind)</strong>
  
```bash
npm install
npm run dev 
```
        
<p align="left">O Vite compila os arquivos CSS e JavaScript para que o frontend funcione corretamente.</p>

###

<p align="left"> <strong>8 - Acessar o sistema</strong><br><br>Agora, o projeto já está rodando!<br><br>
    
`http://localhost8000`  Bairro Melhor <br><br>
`http://localhost8080`  phpMyAdmin</p>

###
