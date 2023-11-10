@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2 class="f-2">Pacientes</h2>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <form method="GET" action="pacientes" class="form-inline my-2 my-lg-1">
            <input class="form-control" type="text" id="search" name="search" placeholder="Busca..." aria-label="Search">
        </form>
    </div>
</nav>
<div class="container d-flex">

    <table class="table table-hover text-muted">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">CPF</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cidade</th>
                <th scope="col">Tipo</th>
                <th scope="col">Editar</th>
                <th scope="col">Remover</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i < count($ids); $i++) <tr>
                <th scope='row'>*</th>
                <td>{{ $nomes[$i] }}</td>
                <td>{{ $cpfs[$i] }}</td>
                <td>{{ $telefones[$i] }}</td>
                <td>{{ $cidades[$i] }}</td>
                <td>{{ $tipos[$i] }}</td>
                <td><a type="button" href="/events/{{ $ids[$i] }}" class="btn btn-success max-100 btn-sm text-center d-grid gap-2">Editar</a></td>
                <td><a type="button" href="/events/deletePaciente/{{ $ids[$i] }}" class="btn btn-danger btn-sm">Remover</a></td>
                @endfor
                </tr>
        </tbody>
    </table>


</div>

@endsection