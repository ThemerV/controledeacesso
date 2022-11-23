<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('assets-front/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets-front/fontawesome-free-6.2.0-web/css/all.css')}}">
    <title>Controle de Acesso - FATEC</title>
</head>
<body>
    <header>
        <nav class="navbar">
            <img class="navbar-brand" src="{{asset('assets-front/images/logo-fatec.svg')}}" alt="logo da fatec">
            <div class="icon">
                <ul class="navbar-nav">
                    <li>
                        <i class="fa-solid fa-circle-user fa-lg"></i>
                        <a href="#">Administrador</a>
                    </li>
                    <li>
                        <i class="fa-solid fa-right-from-bracket fa-lg"></i>
                        <a href="{{route('signout')}}">Sair</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @yield('section')
    <footer>
        <p>@ 2022 Fatec Campinas, SP | Telefone: +55 19 3216-6474</p>   
    </footer>
</body>
</html>