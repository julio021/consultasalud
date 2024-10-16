<!-- resources/views/nuevo_formulario.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Formulario') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('guardarFormulario') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="nombre" class="block text-gray-700">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="w-full p-2 border rounded-lg">
                        </div>
                        <div class="mb-4">
                            <label for="descripcion" class="block text-gray-700">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="w-full p-2 border rounded-lg"></textarea>
                        </div>
                        <button type="submit" class="bg-blue-500 text-white p-2 rounded">Guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
