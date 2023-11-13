<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Serviços') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container mt-2">

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                {{-- <th scope="col">#</th> --}}
                                <th scope="col">Nome</th>
                                <th scope="col">Tipo</th>
                                <th scope="col">Categoria</th>
                                <th scope="col">Editar</th>
                                <th scope="col">Remover</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($servico as $item)
                                <tr>
                                    {{-- <th scope='row'>*</th> --}}
                                    <td>{{ $item->nome }}</td>
                                    <td>{{ $item->tipo }}</td>
                                    <td>{{ $item->categoria }}</td>
                                    <td>
                                        <a type="link" href="/events/{{ $item->id }}">
                                            <button
                                                class="btn btn-success btn-sm text-center d-grid gap-2">Editar</button>
                                        </a>
                                    </td>
                                    <td>
                                        <a type="link" href="/events/deleteServico/{{ $item->id }}">
                                            <button
                                                class="btn btn-danger btn-sm text-center d-grid gap-2">Remover</button>
                                        </a>
                                    </td>
                            @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
