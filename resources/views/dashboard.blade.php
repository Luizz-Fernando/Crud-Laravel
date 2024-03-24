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
                    <p>Bem-Vindo, <b>{{Auth::user()->name}}</b></p>


                </div>
            </div>

            <div class="overflow-hidden shadow-sm sm:rounded-lg mt-4 grid grid-cols-2 gap-4">
                <div class="bg-white p-6 text-gray-900">
                    <p>Clientes cadastrados: <b>{{count($clientes)}}</b></p>
                </div>
                <div class="bg-white p-6 text-gray-900">
                    <p>Usuários cadastraos: <b>{{count($users)}}</b></p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
