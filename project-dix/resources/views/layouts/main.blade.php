<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/script.js"></script>

    <!-- Link Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.5.3/css/bootstrap.min.css">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

</head>

<body>

    <header class="container">
        <h1 class="f-1">Sistema de Agendamento DIX</h1>

        <ul class="nav nav-tabs p-2 d-inline-flex">
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
    </header>

    <main class="container">
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
    <script src="/css/bootstrap.5.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>