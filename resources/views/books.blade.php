<x-app-layout>
    @section('title','SGB | Libros')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de libros') }}
        </h2>
    </x-slot>
    <div class="py-12 flex-grow">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-end m-3">
                    <a href="{{ route('dashboard') }}">
                        <x-button class="bg-indigo-500 hover:bg-indigo-600 focus:bg-indigo-700 active:bg-indigo-900">Regresar</x-button>
                    </a>
                </div>
                <p>Contenido de libros</p>
            </div>
        </div>
    </div>
    <div>
        <x-footer/>
    </div>
</x-app-layout>
