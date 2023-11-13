<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF</title>
    <link rel="stylesheet" href="/bootstrap.5.3/css/bootstrap.min.css">
    <style>
        * {
            font-family: 'Roboto';
        }

        .titulos {
            text-align: center;
            font-size: 22pt;
            padding: 15px;
        }

        thead,
        tr,
        th {
            text-align: left;
            border: 1px solid black;
        }

        tbody,
        tr,
        td {
            text-align: left;
            border: .1px solid black;
        }
    </style>
</head>

<body>

    <div class="titulos">Lista de pacientes</div>

    <table class="table">
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

</body>

</html>
