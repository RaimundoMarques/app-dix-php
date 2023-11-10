@extends('layouts.main')

@section('title', $namePage)

@section('content')

    <h2>Clínicas</h2>

    <div class="container">

        <table class="table table-hover">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nome</th>
                    <th scope="col">CNPJ</th>
                    <th scope="col">Telefone</th>
                    <th scope="col">Cidade</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>
            <tbody>
                @for ($i = 0; $i < count($ids); $i++)
                    <tr>
                        {{-- <th scope='row'>{{ $ids[$i] }}</th> --}}
                        <td>{{ $nomes[$i] }}</td>
                        <td>{{ $cnpjs[$i] }}</td>
                        <td>{{ $telefones[$i] }}</td>
                        <td>{{ $cidades[$i] }}</td>
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
