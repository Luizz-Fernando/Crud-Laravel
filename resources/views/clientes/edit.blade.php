<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Olá <b>{{Auth::user()->name}}</b></p>

                    <p class="mb-4">
                        <a href="{{route('cliente.index')}}" class="bg-blue-500 text-white rounded p-2">Lista de clientes</a>
                    </p>

                    <p class="mb-4">
                        <a href="{{route('meus.clientes', Auth::user()->id)}}" class="bg-blue-500 text-white rounded p-2">Meus Clientes</a>
                    </p>

                    @if (session('msg'))
                    <p class="bg-blue-500 p-2 text-center text-white">{{session('msg')}}</p>
                    @endif

                    <form action="{{ route('cliente.update', $cliente->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <fieldset class="border-2 rounded p-6">
                            <legend>Preencha os campos</legend>

                            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome" value="{{$cliente->nome}}" class="w-full rounded" required autofocus>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="{{$cliente->email}}" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="telefone">Telefone</label>
                                <input type="tel" name="telefone" id="telefone" value="{{$cliente->telefone}}" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="empresa">Empresa</label>
                                <input type="text" name="empresa" id="empresa" value="{{$cliente->empresa}}" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-4">
                                <label for="tel_comercial">Tel. comercial</label>
                                <input type="text" name="tel_comercial" id="tel_comercial" value="{{$cliente->tel_comercial}}" class="w-full rounded" required>
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden">
                                <input type="submit" value="Salvar alterações" class="bg-blue-500 text-white rounded p-2">

                            </div>

                        </fieldset>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
