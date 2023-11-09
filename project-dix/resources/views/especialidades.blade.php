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
            @for($i=0; $i < count($ids); $i++) <tr>
                <th scope='row'>{{ $ids[$i] }}</th>
                <td>{{ $nomes[$i] }}</td>
                <td>{{ $datacriacaos[$i] }}</td>
                <td>{{ $dataatualizacaos[$i] }}</td>
                @endfor
                </tr>
        </tbody>
    </table>

</div>

@endsection