<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <b>{{ Auth::user()->name }}</b></p>
                    <p class="mb-4">
                        Gostaria de excluir o(a) cliente <b> {{$id->nome}}</b><br>
                        Não será possível desfazer esta ação
                    </p>
                    <p>
                    <form action="{{ route('cliente.destroy', $id->id) }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-red-500">Sim</button>
                        <a href="{{route('cliente.show', $id->id)}}">Não</a>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
