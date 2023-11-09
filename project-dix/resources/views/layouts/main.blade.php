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

    <!-- Link -->

    <!-- Styles -->
    </style>
</head>

<body>

<h1 class="f-1">Sistema de Agendamento DIX</h1>

    <ul class="nav nav-tabs justify-content-center p-2">
        <li class="nav-item"><a class="nav-link" href="/home">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="/servicos">SERVIÇOS</a></li>
        <li class="nav-item"><a class="nav-link" href="/pacientes">PACIENTES</a></li>
        <li class="nav-item"><a class="nav-link" href="/especialidades">ESPECIALIDADES</a></li>
        <li class="nav-item"><a class="nav-link" href="/profissionais">PROFISSIONAIS</a></li>
        <li class="nav-item"><a class="nav-link" href="/clinicas">CLÍNICAS</a></li>
        <li class="nav-item"><a class="nav-link" href="/clinicasServicos">CLÍNICAS e SERVIÇOS</a></li>
        <li class="nav-item"><a class="nav-link" onclick="btnSair()">SAIR</a></li>
    </ul>

    @yield('content')

    <footer>
        <p>Footer da Página</p>
    </footer>

</body>

</html>