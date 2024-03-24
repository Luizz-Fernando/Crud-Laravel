<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Detalhes do cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <b>{{Auth::user()->name}}</b></p>

                    <p class="mb-4">
                        Exibindo detalhes do cliente <b> {{$cliente->nome}}</b>
                    </p>

                    <p>
                        <a href="{{route('meus.clientes', Auth::user()->id)}}" class="bg-blue-500 text-white rounded p-2">Meus clientes</a>
                        <a href="{{route('cliente.edit', $cliente->id)}}" class="bg-purple-500 text-white rounded p-2">Editar dados do Cliente</a>
                        <a href="{{route('confirma.delete', $cliente->id)}}" class="bg-red-500 text-white rounded p-2">Deletar</a>
                    </p>

                    <p class="p-6 text-gray-900">
                        <p><b>Nome: </b>{{$cliente->nome}}</p>
                        <p><b>Email: </b>{{$cliente->email}} |  <b>Telefone: </b>{{$cliente->telefone}}</p>
                        <p><b>Empresa: </b>{{$cliente->empresa}}</p>
                        <p><b>Tel. comercial: </b>{{$cliente->tel_comercial}}</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
