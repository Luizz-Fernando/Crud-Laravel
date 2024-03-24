<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Lista de usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p >Olá <b>{{ Auth::user()->name }}</b></p>
                </div>

                <div class="p-3 bg-gray-100 rounded-lg m-2">
                    {{$users->links()}}
                </div>

                <div class="p-6 text-gray-900">
                    <table class="table-auto w-full">
                        <thead class="text-left bg-gray-100">
                            <tr>
                                <th class="text-center">Nível</th>
                                <th class="p-2">Nome</th>
                                <th>Email</th>
                                <th>Data cadastro</th>

                                @can('level')
                                    <th class="text-center">Ações</th>
                                @endcan
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($users as $user)
                                <tr class="hover:bg-gray-100">
                                    <td class="text-center">
                                        @if ($user->level == 'admin')
                                            <i class="fa-solid fa-user-gear"></i>
                                        @else
                                            <i class="fa-solid fa-user"></i>
                                        @endif
                                    </td>
                                    <td class="p-2">{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>

                                    @can('level')
                                        <td class="text-center"> <a href="{{ route('user.edit', $user->id) }}">Editar</a> </td>
                                    @endcan
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
