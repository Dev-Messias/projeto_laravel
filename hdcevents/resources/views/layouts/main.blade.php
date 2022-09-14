<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

       <!-- FONT GOOGLE -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;500;700;900&display=swap" rel="stylesheet">

       <!-- CSS BOOT -->
        <link href="/css/bt/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <!-- MEU CSS -->
        <link rel="stylesheet" href="/css/styles.css" >
        <script src="/js/scripts.js" ></script>
        <!-- JS -->
        <script src="/css/bt/js/scripts.js" ></script>
        <script src="/css/bt/js/bootstrap.min.js" ></script>
    </head>
   <body>
        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logo.png" alt="Logo">
                    </a>
                    <ul class="navbar-nav" >
                        <li class="nav-item" >
                            <a href="/" class="nav-link">Eventos</a>
                        </li>
                        <li class="nav-item" >
                            <a href="/events/create" class="nav-link">Criar Eventos</a>
                        </li>
                        <li class="nav-item" >
                            <a href="/" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item" >
                            <a href="/" class="nav-link">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        @yield('content')
        <footer>
            <p>HDC Events &copy; 2022</p>
        </footer>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
   </body>
</html>
