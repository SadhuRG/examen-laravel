<?php

namespace App\Http\Controllers;

use App\Models\Alumno; //
use Illuminate\Http\Request;


class AlumnoController extends Controller
{
    public function create()
    {
        return view('ingreso');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'curso' => 'required|string|max:255',
            'nota1' => 'required|numeric|min:0|max:20',
            'nota2' => 'required|numeric|min:0|max:20',
        ]);

        $alumno = new \App\Models\Alumno([
            'nombre' => $request->get('nombre'),
            'curso' => $request->get('curso'),
            'nota1' => $request->get('nota1'),
            'nota2' => $request->get('nota2'),
            'fecha_registro' => now(),
        ]);

        $alumno->save();

        return redirect()->route('alumnos.create')->with('success', 'Alumno registrado exitosamente');
    }

    public function index()
    {
        $alumnos = \App\Models\Alumno::all();
        return view('listado', compact('alumnos'));
    }


    // AlumnoController.php
    public function show($id)
    {
        $alumno = Alumno::findOrFail($id);
    return view('show', compact('alumno'));
    }
    //
}
