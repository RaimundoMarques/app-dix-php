@extends('layouts.main')

@section('title', $namePage)

@section('content')
<h2>Serviços</h2>

<div class="container">

    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Tipo</th>
                <th scope="col">Categoria</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i < count($ids); $i++) <tr>
                <th scope='row'>{{ $ids[$i] }}</th>
                <td>{{ $nomes[$i] }}</td>
                <td>{{ $tipos[$i] }}</td>
                <td>{{ $categorias[$i] }}</td>

            @endfor
            </tr>
        </tbody>
    </table>
</div>

@endsection