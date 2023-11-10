@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2>Especialidades</h2>

<div class="container">

    <table class="table table-hover text-left">
        <thead>
            <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Nome</th>
                <th scope="col">Data de criação</th>
                <th scope="col">Data de atualização</th>
                <th scope="col">Editar</th>
            </tr>
        </thead>
        <tbody>
            @for($i=0; $i < count($ids); $i++) <tr>
                {{-- <th scope='row'>*</th> --}}
                <td>{{ $nomes[$i] }}</td>
                <td>{{ date('d/m/Y', strtotime($datacriacaos[$i])) }}</td>
                <td>{{ date('d/m/Y', strtotime($dataatualizacaos[$i])) }}</td>
                <td><button class="btn btn-secondary btn-sm">Editar</button></td>
                @endfor
                </tr>
        </tbody>
    </table>

</div>

@endsection