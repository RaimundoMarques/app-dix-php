@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2 class="f-2 text-left text-muted">Cadastro de cliente</h2>


<form action="/events" method="POST">
    <div class="container w-50">
        @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="nome" placeholder="Nome de usuário" required>
            <label for="floatingInput" class="text-muted">Nome</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="cpf" placeholder="Nome de usuário" required>
            <label for="floatingInput" class="text-muted">CPF</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="telefone" placeholder="Nome de usuário" required>
            <label for="floatingInput" class="text-muted">Telefone</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="cidade" placeholder="Nome de usuário" required>
            <label for="floatingInput" class="text-muted">Cidade</label>
        </div>

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" name="tipo" placeholder="Nome de usuário" required>
            <label for="floatingInput" class="text-muted">Tipo</label>
        </div>

        <div class="d-grid gap-2 mx-auto mt-4">
            <button id="div-btn-create" class="btn btn-primary" type="submit">Cadastrar</button>
        </div>
    </div>
</form>

@endsection