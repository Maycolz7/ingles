<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use HasFactory;

    protected $fillable =[
        'Nombre',
        'Descripcion',
        'Docente_id',
        'Salon',
        'Capacidad',
        'Fecha de inicio',
        'Fecha de fin',
        'Curso_id',
        'Periodo_academico_id',
    ];

    public function docente(){
        return $this->belongsTo(User::class, 'Docente_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'Curso_id');
    }

    public function periodoacademico(){
        return $this->belongsTo(Periodoacademico::class, "Periodo_academico_id");
    }
}
