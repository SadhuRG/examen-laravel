@extends('layouts.layout')

@section('title','INGRESO')


@section('content')


    @if ($errors->any())
        <div class="alert alert-danger">

            <ul>
                @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                @endforeach

            </ul>

        </div>
    @endif

    <h1 class="text-3xl m-6 text-center">INGRESO</h1>

    <form action="{{ route('alumnos.store') }}" method="POST" class="max-w-lg mx-auto mt-8">
        @csrf

        <div class="mb-4">
            <label for="nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre:</label>

            <input type="text" name="nombre" id="nombre" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

        </div>
        <div class="mb-4">

            <label for="curso" class="block text-gray-700 text-sm font-bold mb-2">Curso:</label>
            <input type="text" name="curso" id="curso" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">
            <label for="nota1" class="block text-gray-700 text-sm font-bold mb-2">Nota 1:</label>
            <input type="number" step="0.01" name="nota1" id="nota1" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
        </div>
        <div class="mb-4">

            <label for="nota2" class="block text-gray-700 text-sm font-bold mb-2">Nota 2:</label>

            <input type="number" step="0.01" name="nota2" id="nota2" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>

        </div>

        <div class="flex items-center justify-between">

            <button type="submit" class="bg-red-500 hover:bg-red-700 text-black border-black border-2 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">

                Guardar
            </button>

        </div>

    </form>
@endsection