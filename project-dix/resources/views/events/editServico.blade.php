<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Serviço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/updateServico/{{ $servico->id }}" method="POST" class="form-group">
                        @csrf
                        @method('PUT')
                        <div class="container mt-1 w-50">
                            <label for="Nome" class="fs-5">
                                <strong>Nome</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $servico->nome }}" name="nome" placeholder="Nome de usuário" required>
                            </div>

                            <label for="Tipo" class="fs-5">
                                <strong>Tipo</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $servico->tipo }}" name="tipo" placeholder="Tipo" required>
                            </div>

                            <label for="Categoria" class="fs-5">
                                <strong>Categoria</strong>
                            </label>
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    value="{{ $servico->categoria }}" name="categoria" placeholder="Categoria" required>
                            </div>

                            <div class="d-grid gap-2 w-25 text-center m-auto p-2">
                                <input type="submit" class="btn btn-warning fs-5" value="Editar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
