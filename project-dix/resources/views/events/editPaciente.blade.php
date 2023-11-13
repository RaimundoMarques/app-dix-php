<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Paciente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/update/{{ $paciente->id }}" method="POST" class="form-group">
                        @csrf
                        @method('PUT')
                        <div class="container mt-1 w-50 border">
                            <label for="Nome">Nome</label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $paciente->nome }}" name="nome" placeholder="Nome de usuário" required>
                            </div>

                            <label for="cpf">CPF</label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $paciente->cpf }}" name="cpf" placeholder="CPF" required>
                            </div>

                            <label for="telefone">Telefone</label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $paciente->telefone }}" name="telefone" placeholder="Telefone" required>
                            </div>

                            <label for="cidade">Cidade</label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $paciente->cidade }}" name="cidade" placeholder="Cidade" required>
                            </div>

                            <label for="cidade">Tipo</label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $paciente->tipo }}" name="tipo" placeholder="Tipo" required>
                            </div>
                            <div class="d-grid gap-2 w-25 text-center m-auto p-2">
                                <input type="submit" class="btn btn-warning fs-5" value="Editar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
