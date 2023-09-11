<x-app-layout>
    @section('title','SGB | Solicitantes')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listado de solicitantes') }}
        </h2>
    </x-slot>
    <div class="py-12 flex-grow">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="flex justify-end m-3">
                    <a href="{{ route('dashboard') }}">
                        <x-button class="bg-purple-500 hover:bg-purple-600 focus:bg-purple-700 active:bg-purple-900">Regresar</x-button>
                    </a>
                </div>
                <p>Contenido de solicitantes</p>
            </div>
        </div>
    </div>
    <div>
        <x-footer/>
    </div>
</x-app-layout>
