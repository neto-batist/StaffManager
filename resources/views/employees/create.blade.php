<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Criar Novo Funcionário') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @if ($errors->any())
                        <div class="mb-4">
                            <div class="font-medium text-red-600">{{ __('Opa! Algo deu errado.') }}</div>
                            <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('employees.store') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block font-medium text-sm text-gray-700">Nome</label>
                                <input type="text" name="name" id="name" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('name') }}" required>
                            </div>
                            <div>
                                <label for="cpf" class="block font-medium text-sm text-gray-700">CPF</label>
                                <input x-init="IMask($el, cpfMaskOptions)" type="text" name="cpf" id="cpf" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('cpf') }}" required>
                            </div>
                            <div>
                                <label for="birth_date" class="block font-medium text-sm text-gray-700">Data de Nascimento</label>
                                <input type="date" name="birth_date" id="birth_date" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('birth_date') }}" required>
                            </div>
                            <div>
                                <label for="phone" class="block font-medium text-sm text-gray-700">Telefone</label>
                                <input x-init="IMask($el, phoneMaskOptions)" type="tel" name="phone" id="phone" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" value="{{ old('phone') }}" required>
                            </div>
                            <div class="md:col-span-2">
                                <label for="gender" class="block font-medium text-sm text-gray-700">Gênero</label>
                                <select name="gender" id="gender" class="block mt-1 w-full rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
                                    <option value="">Selecione...</option>
                                    <option value="Masculino" {{ old('gender') == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                                    <option value="Feminino" {{ old('gender') == 'Feminino' ? 'selected' : '' }}>Feminino</option>
                                    <option value="Outro" {{ old('gender') == 'Outro' ? 'selected' : '' }}>Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <a href="{{ route('employees.index') }}" class="text-sm text-gray-600 hover:text-gray-900 mr-4">Cancelar</a>
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Salvar
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>