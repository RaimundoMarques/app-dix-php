<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body class="container">

    <h1 class="f-1">Sistema de Agendamento DIX</h1>

    <ul class="nav nav-tabs justify-content-center p-2">
        <li class="nav-item"><a class="nav-link" href="/home">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="/servicos">SERVIÇOS</a></li>
        <!-- <li class="nav-item"><a class="nav-link" href="/pacientes">PACIENTES</a></li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">PACIENTES</a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/pacientes">Consultar Pacientes</a></li>
                <li><a class="dropdown-item" href="/events/createPaciente">Cadastrar Pacientes</a></li>
            </ul>
        </li>
        <li class="nav-item"><a class="nav-link" href="/especialidades">ESPECIALIDADES</a></li>
        <li class="nav-item"><a class="nav-link" href="/profissionais">PROFISSIONAIS</a></li>
        <li class="nav-item"><a class="nav-link" href="/clinicas">CLÍNICAS</a></li>
        <li class="nav-item"><a class="nav-link" href="/clinicasServicos">CLÍNICAS e SERVIÇOS</a></li>
        <li class="nav-item"><a class="nav-link" onclick="btnSair()">SAIR</a></li>

    </ul>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if( session('msg'))
                    <p class="msg">{{ session('msg')}}</p>
                @endif

                @yield('content')
            </div>
        </div>
    </main>


    <footer>
        <p>Footer da Página</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>