@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2>Especialidades</h2>

<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Data de criação</th>
                <th scope="col">Data de atualização</th>
            </tr>
        </thead>
        <tbody>
            <?php
            for ($i = 0; $i < count($data); $i++) {
                extract($data[$i]);
                echo "<tr>";
                echo "<th scope='row'>" . $id . "</th>";
                echo "<td>" . $nome . "</td>";
                echo "<td>" . $datacriacao . "</td>";
                echo "<td>" . $dataatualizacao . "</td>";
            } ?>
            </tr>

        </tbody>
    </table>

</div>

@endsection