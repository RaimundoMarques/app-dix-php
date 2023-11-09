@extends('layouts.create')

@section('title', $namePage)

@section('content')

<div class="container">
    <form>
        <div class="form-group">
            <label for="nomeInput">Nome</label>
            <input type="email" class="form-control" id="nomeInput" placeholder="Digite o nome">
        </div>

        <div class="form-group">
            <label for="cpfInput">CPF</label>
            <input type="email" class="form-control" id="cpfInput" placeholder="Digite o cpf">
        </div>

        <div class="form-group">
            <label for="telefoneInput">Telefone</label>
            <input type="email" class="form-control" id="telefoneInput" placeholder="Digite o telefone">
        </div>

        <div class="form-group">
            <label for="cidadeInput">Cidade</label>
            <input type="email" class="form-control" id="cidadeInput" placeholder="Digite a cidade">
        </div>

        <div class="form-group">
            <label for="tipoInput">Tipo</label>
            <input type="email" class="form-control" id="tipoInput" placeholder="Digite a tipo">
        </div>
    </form>
</div>
@endsection