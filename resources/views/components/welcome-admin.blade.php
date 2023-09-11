<div>
    <div class="container mx-auto mt-8">
        <div>
            <h1 class="text-3xl font-semibold text-center">Menú principal</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 my-10 px-4">
                <a href="{{ route('authors.index') }}">
                    <div class="flex justify-center items-center">
                        <!-- Botón Autores -->
                        <button @click="librosModal = true" class="bg-green-500 hover:bg-green-600 text-white rounded-lg p-4 flex items-center space-x-2">
                            <div class="col">
                                <span>Autores</span>
                                <img class="mx-2 h-24 w-auto mt-2" src="{{ asset('img/author.jpg') }}" alt="">
                            </div>
                        </button>
                    </div>
                </a>
                <a href="{{ route('books.index') }}">
                    <div class="flex justify-center items-center">
                        <!-- Botón Libros -->
                        <button @click="librosModal = true" class="bg-blue-500 hover:bg-blue-600 text-white rounded-lg p-4 flex items-center space-x-2">
                            <div class="col">
                                <span>Libros</span>
                                <img class="h-24 w-auto mt-2" src="{{ asset('img/books.png') }}" alt="">
                            </div>
                        </button>
                    </div>
                </a>
                <a href="{{ route('applicants.index') }}">
                    <div class="flex justify-center items-center">
                        <!-- Botón Libros -->
                        <button @click="librosModal = true" class="bg-purple-500 hover:bg-purple-600 text-white rounded-lg p-4 flex items-center space-x-2">
                            <div class="col">
                                <span>Solicitantes</span>
                                <img class="mx-2 h-24 w-auto mt-2" src="{{ asset('img/users.jpg') }}" alt="">
                            </div>
                        </button>
                    </div>
                </a>
                <a href="{{ route('loans.index') }}">
                    <div class="flex justify-center items-center">
                        <!-- Botón Préstamos -->
                        <button @click="librosModal = true" class="bg-red-500 hover:bg-red-600 text-white rounded-lg p-4 flex items-center space-x-2">
                            <div class="col">
                                <span>Prestamos</span>
                                <img class="mx-2 h-24 w-auto mt-2" src="{{ asset('img/prestamos.png') }}" alt="">
                            </div>
                        </button>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
