@extends('layouts.layout')

@section('title', 'Detalle del Alumno')

@section('content')

    <div class="container mt-5">
        <h2 class="text-center mb-4">Detalle del Alumno</h2>
        <div class="card">
            <div class="card-header">
                <h3>{{ $alumno->nombre }}</h3>
            </div>
            <div class="card-body">
                <p><strong>Curso:</strong> {{ $alumno->curso }}</p>
                <p><strong>Nota 1:</strong> {{ $alumno->nota1 }}</p>
                <p><strong>Nota 2:</strong> {{ $alumno->nota2 }}</p>
                <p><strong>Promedio:</strong> {{ $alumno->promedio }}</p>
                <p><strong>Condición:</strong> {{ $alumno->condicion }}</p>
            </div>
            <div class="card-footer">
                <a href="{{ route('listado') }}" class="btn btn-primary">Volver al Listado</a>
            </div>
        </div>
    </div>

@endsection