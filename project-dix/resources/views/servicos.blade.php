<x-app-layout>
    <x-slot name="header">
        <div class="row text-center">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Lista de Serviços') }}
                </h2>
            </div>
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    <a href="/events/createServico" class="btn btn-primary">{{ __('Cadastrar Serviço') }}</a>
                </h2>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (count($servico) == 0)
                    <p class="fs-1 text-muted p-4 text-center">Não há registros para serem exibidos</p>
                @else
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
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
