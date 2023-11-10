@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2 class="f-2 text-center">Deletar de cliente</h2>

<div class="container">

    <form action="/events/{{ $paciente->id }}" method="POST">
        @csrf
        @method('DELETE')

        <p>{{ $paciente->id }}</p>
        <p>{{ $paciente->nome }}</p>
        <p>{{ $paciente->cpf }}</p>
        <p>{{ $paciente->telefone }}</p>
        <p>{{ $paciente->cidade }}</p>
        <p>{{ $paciente->tipo }}</p>

        <input type="submit" class="btn btn-danger btn-sm" value="Deletar">

    </form>

</div>
@endsection