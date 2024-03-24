<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edição de usuário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 mb-2">
                    <p>Editando nível de acesso do usuário <b>{{$user->name}}</b></p>

                    <p>Nível de acesso: <b>{{$user->level}}</b></p>
                </div>

                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="level">Selecione o nível</label><br>
                        <select name="level" required class="py-1 px-8 rounded">
                            <option value="" selected disabled>Selecione uma opção</option>
                            <option value="user">Usuário</option>
                            <option value="admin">Admin</option>
                        </select>
                        <button type="submit" class="bg-blue-500 text-white rounded p-2">
                            <i class="fa-regular fa-floppy-disk mr-2"></i>Salvar alterações
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
