<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://code.jquery.com/jquery-3.0.0.js"></script>
    <script type="text/javascript" src="/js/script.js"></script>
    <title>@yield('titlelog')</title>
</head>
<body>
    <!-- CABEÇALHO -->
    <header>
        <div class="fundo-header">
            <div class="linha">
                <div class="header">
                    <!-- LOGO -->
                    <div class="col1 coluna">
                        <a href="/painel"><img src="/img/eduflix.png" class="logo_flix" alt="Eduflix"> <p class="logo_nome">Eduflix</p></a>
                    </div>
                    <!-- MENU -->
                    <div class="col2 coluna">
                        <ul class="menu2">
                            <li><a href="#">usuario@gmail.com</a></li>
                            <li><a href="/cursos">Cursos</a></li>
                            <li><a href="/matriz">Matriz</a></li>
                            <li><a href="/logout">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- CORPO -->
    <section>
        @yield('contentlog')
    </section>
    <!-- FOOTER -->
    <footer>
        <center><p class="termos"><small>Todos os direitos reservados a EduFlix &copy; 2022</small></p></center>
    </footer>
</body>
</html>