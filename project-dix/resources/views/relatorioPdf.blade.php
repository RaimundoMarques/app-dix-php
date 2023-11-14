<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: 'Roboto';
        }

        .titulos {
            text-align: center;
            font-size: 18pt;
            padding: 15px;
        }

        thead,
        tr,
        th {
            text-align: left;
        }

        tbody,
        tr,
        td {
            text-align: left;
        }
    </style>
</head>

<body>

    <div class="titulos">Lista de pacientes</div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paciente as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->cpf }}</td>
                    <td>{{ $item->telefone }}</td>
                    <td>{{ $item->cidade }}</td>
                    <td>{{ $item->tipo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <hr>

    <div class="titulos">Lista de serviços</div>

    <table class="table table-striped">

        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servico as $item)
                <tr>
                    <td>{{ $item->nome }}</td>
                    <td>{{ $item->tipo }}</td>
                    <td>{{ $item->categoria }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
