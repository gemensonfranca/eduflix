<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <title>@yield('title')</title>
</head>
<body>
    <!-- CABEÇALHO -->
    <header>
        <div class="fundo-header">
            <div class="linha">
                <div class="header">
                    <!-- LOGO -->
                    <div class="col1 coluna">
                       <a href="/"><img src="/img/eduflix.png" class="logo_flix" alt="Eduflix"> <p class="logo_nome">Eduflix</p></a>
                    </div>
                    <!-- MENU -->
                    <div class="col2 coluna">
                        <ul class="menu">
                            <li><a href="/cursos">Cursos</a></li>
                            <li><a href="/matriz">Matriz</a></li>
                            <li><a href="/login">Entrar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- CORPO -->
    <section>
        @yield('content')
    </section>
    <!-- FOOTER -->
    <footer>
        <center><p class="termos"><small>Todos os direitos reservados a EduFlix &copy; 2022</small></p></center>
    </footer>
</body>
</html>