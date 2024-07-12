@extends('layouts.layout')

@section('title','LISTADO')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center mb-4">LISTADO DE ALUMNOS</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Alumno</th>
                </tr>
            </thead>
            <tbody>
                @foreach($alumnos as $index => $alumno)
                    <tr>
                        <td>Alumno {{ $index + 1 }}</td>
                        <td>
                            <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-info">Detalle</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection