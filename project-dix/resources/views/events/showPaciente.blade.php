@extends('layouts.main')

@section('title', $paciente-> nome ) 

@section('content')


<p>{{ $paciente->id }}</p>
<p>{{ $paciente->nome }}</p>
<p>{{ $paciente->cpf }}</p>
<p>{{ $paciente->telefone }}</p>
<p>{{ $paciente->cidade }}</p>
<p>{{ $paciente->tipo }}</p>


@endsection