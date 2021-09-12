<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="/JavaScript/script.js"></script>
        <title>@yield('title')</title> <!--Cria titulo dinamicamente para pegar nos layouts de outras paginas -->
        {{-- Fontes google --}}
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        {{-- Fontes google --}}

        {{--CSS Bootstrap --}}
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        {{--CSS Bootstrap --}}

        {{-- Js bootstrap --}}
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
        {{-- Js bootstrap --}}
        <link rel="stylesheet" href="/css/style.css">
    </head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
            <a href="/" class="navbar-brand">
                <img src="/imagens/logo.png" alt="DealerUp">
            </a>
            <ul class="navbar-nav">
                @auth
                <li class="nav-item">
                    <a href="/tarefa/create" class="nav-link">Criar tarefas</a>
                </li>
                <li>
                    <a href="/dashboard" class="nav-link">Minhas tarefas</a>
                </li>
                <li>
                    <a href="/totalTarefas" class="nav-link">Todas as tarefas</a>
                </li>
                <li>
                    <a href="/showusers" class="nav-link">Todos os usuarios</a>
                </li>
                <li>
                    <form action="/logout" method="POST">
                        @csrf
                        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                    </form>
                </li>
                @endauth
                @guest
                <li>
                    <a href="/login" class="nav-link">Logar-se</a>
                </li>
                <li>
                    <a href="/register" class="nav-link">Cadastrar</a>
                </li>
                @endguest
            </ul>
            </div>
        </nav>
    </header>
    <main>
        <div class="container-fluid">
            <div class="row">
                @if(session('msg'))
                    <div class="msg">{{ session('msg') }}</div>
                @endif
                @yield('content') {{-- Função que contem o conteúdo do web site --}}
            </div>
        </div>
    </main>
    <footer>
        <p>
          <h3>DealerUp &copy; 2021</h3>
        </p>
    </footer>

</body>
</html>
