<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Excluir serviço') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <form action="/events/delService/{{ $servico->id }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    {{-- <th scope="col">#</th> --}}
                                    <th scope="col">Nome</th>
                                    <th scope="col">Tipo</th>
                                    <th scope="col">Categoria</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- <th scope="row">{{ $paciente->id }}</th> --}}
                                    <td>{{ $servico->nome }}</td>
                                    <td>{{ $servico->tipo }}</td>
                                    <td>{{ $servico->categoria }}</td>
                                    <td>
                                        <button type="submit"
                                            class="btn btn-danger btn-sm text-center d-grid gap-2">Deletar</button>
                                    </td>   
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>

</x-app-layout>
