@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2>Clínicas</h2>

<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CNPJ</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
                extract($data[$i]);
                echo "<tr>";
                echo "<th scope='row'>" . $id . "</th>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $cnpj . "</td>";
                echo "<td>" . $telefone . "</td>";
                echo "<td>" . $cidade . "</td>";
            } ?>
            </tr>

        </tbody>
    </table>

</div>

@endsection