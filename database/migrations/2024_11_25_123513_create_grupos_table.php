<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->id();
            $table->integer("Capacidad");
            $table->string("Descripcion");
            $table->foreignId("Docente_id")->constrained("users")->onDelete("cascade");
            $table->foreignId("Curso_id")->constrained("cursos")->onDelete("cascade");
            $table->foreignId("Periodo_academico_id")->constrained("periodoacademicos")->onDelete("cascade");
            $table->String("Nombre");
            $table->date("Fecha de inicio");
            $table->date("Fecha de fin");
            $table->String("Salon");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('grupos');
    }
};
