@extends('layouts.main')

@section('title', $namePage)

@section('content')

    <div class="container fs-2 text-muted">Especialidades</div>
    <div class="container">

        <table class="table table-hover text-left">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nome</th>
                    <th scope="col">Data de criação</th>
                    <th scope="col">Data de atualização</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($ids); $i++)
                    <tr>
                        {{-- <th scope='row'>*</th> --}}
                        <td>{{ $nomes[$i] }}</td>
                        <td>{{ date('d/m/Y', strtotime($datacriacaos[$i])) }}</td>
                        <td>{{ date('d/m/Y', strtotime($dataatualizacaos[$i])) }}</td>
                        <td><a type="button" href="/events/{{ $ids[$i] }}"
                                class="btn btn-success max-100 btn-sm text-center d-grid gap-2">Editar</a></td>
                        <td><a type="button" href="/events/deletePaciente/{{ $ids[$i] }}"
                                class="btn btn-danger btn-sm">Remover</a></td>
                @endfor
                </tr>
            </tbody>
        </table>

    </div>

@endsection
