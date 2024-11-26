<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registro extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'Estado',
        'Grupo_id',
        'Curso_id',
        'Usuario_id',
        'Periodo_academico_id',
    ];

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'Grupo_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class, 'Curso_id');
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'Usuario_id');
    }

    public function periodoAcademico(){
        return $this->belongsTo(Periodoacademico::class, 'Periodo_academico_id');
    }
}
