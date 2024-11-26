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
        Schema::create('registros', function (Blueprint $table) {
            $table->id();
            $table->string("Estado");
            $table->foreignId("Grupo_id")->constrained("grupos")->onDelete("cascade");
            $table->foreignId("Curso_id")->constrained("cursos")->onDelete("cascade");
            $table->foreignId("Usuario_id")->constrained("users")->onDelete("cascade");
            $table->foreignId("Periodo_academico_id")->constrained("periodoacademicos")->onDelete("cascade");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registros');
    }
};
