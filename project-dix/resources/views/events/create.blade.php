@extends('layouts.main')

@section('title', $namePage)

@section('content')

<h2 class="f-2 text-center">Cadastrar de cliente</h2>

<div class="container">
    <form action="/events" method="POST">
        @csrf
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome">
        </div>

        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o cpf">
        </div>

        <div class="form-group">
            <label for="telefone">Telefone:</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone">
        </div>

        <div class="form-group">
            <label for="cidade">Cidade:</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Digite a cidade">
        </div>

        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" class="form-control" id="tipo" name="tipo" placeholder="Digite a tipo">
        </div>

        <div class="d-grid gap-2 mx-auto mt-4">
            <button id="div-btn-create" class="btn btn-primary" type="submit">Cadastrar</button>
        </div>
    </form>
</div>
@endsection