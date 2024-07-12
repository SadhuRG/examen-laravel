<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';

    protected $fillable = [
        'nombre',
        'curso',
        'nota1',
        'nota2',
        'fecha_registro'
    ];

    protected $casts = [
        'nota1' => 'decimal:2',
        'nota2' => 'decimal:2',
        'promedio' => 'decimal:2',
        'fecha_registro' => 'datetime',
    ];

    public function getPromedioAttribute()
    {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function getCondicionAttribute()
    {
        return $this->promedio >= 13.4 ? 'Aprobado' : 'Desaprobado';
    }
    use HasFactory;
}
