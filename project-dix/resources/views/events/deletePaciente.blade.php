@extends('layouts.main')

@section('title', $namePage)

@section('content')

    <h2 class="f-2 text-center mb-4 mt-4 text-muted">Deletar registro: {{ $paciente->nome }}</h2>

    <div class="container">

        <form action="/events/{{ $paciente->id }}" method="POST">
            @csrf
            @method('DELETE')

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        {{-- <th scope="col">#</th> --}}
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{-- <th scope="row">{{ $paciente->id }}</th> --}}
                        <td>{{ $paciente->nome }}</td>
                        <td>{{ $paciente->cpf }}</td>
                        <td>{{ $paciente->telefone }}</td>
                        <td>{{ $paciente->cidade }}</td>
                        <td>{{ $paciente->tipo }}</td>
                        <td><input type="submit" class="btn btn-danger btn-sm" value="Deletar"></td>
                    </tr>
                </tbody>
            </table>
        </form>

    </div>
@endsection
