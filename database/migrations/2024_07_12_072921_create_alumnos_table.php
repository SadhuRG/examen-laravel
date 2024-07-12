<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('curso');
            $table->decimal('nota1');
            $table->decimal('nota2');
            $table->decimal('promedio')->virtualAs('((nota1 + nota2) / 2)');
            $table->enum('condicion', ['Aprobado', 'Desaprobado'])->virtualAs('IF((nota1 + nota2) / 2 >= 13.4, "Aprobado", "Desaprobado")');
            $table->timestamp('fecha_registro')->useCurrent();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
