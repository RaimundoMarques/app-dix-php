@extends('layouts.main')

@section('title', $namePage)


@section('content')

<h2>Profissionais</h2>

<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i < count($ids); $i++) <tr>
                <th scope='row'>{{ $ids[$i] }}</th>
                <td>{{ $nomes[$i] }}</td>
                <td>{{ $cpfs[$i] }}</td>
                <td>{{ $telefones[$i] }}</td>
                <td>{{ $cidades[$i] }}</td>
                <td><button class="btn btn-secondary btn-sm">Editar</button></td>
                @endfor
                </tr>  
        </tbody>
    </table>

</div>

@endsection