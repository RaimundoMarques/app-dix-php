@extends('layouts.main')

@section('title', $paciente-> nome )

@section('content')

<h2 class="fs-2 text-muted">Editar Paciente</h2>


<form action="/events/update/{{ $paciente-> id }}" method="POST" class="form-group">
    @csrf
    @method('PUT')
    <div class="container mt-1 w-50 border">
        <label for="Nome">Nome</label>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Nome de usuário" required>
            <label for="floatingInput" class="text-muted">{{ $paciente-> nome }}</label>
        </div>

        <label for="cpf">CPF</label>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="CPF" required>
            <label for="floatingInput" class="text-muted">{{ $paciente-> cpf }}</label>
        </div>

        <label for="telefone">Telefone</label>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Telefone" required>
            <label for="floatingInput" class="text-muted">{{ $paciente-> telefone }}</label>
        </div>

        <label for="cidade">Cidade</label>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Cidade" required>
            <label for="floatingInput" class="text-muted">{{ $paciente-> cidade }}</label>
        </div>

        <label for="cidade">Tipo</label>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Tipo" required>
            <label for="floatingInput" class="text-muted">{{ $paciente-> tipo }}</label>
        </div>
        <div class="d-grid gap-2 w-25 text-center m-auto p-2">
            <input type="submit" class="btn btn-warning fs-5" value="Editar">
        </div>
    </div>
</form>


@endsection