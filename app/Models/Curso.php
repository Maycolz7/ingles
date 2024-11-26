<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Curso extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'Codigo',
        'Nombre',
        'Modalidad',
        'Requisito',
    ];

    public function grupos(){
        return $this->hasMany(Grupo::class);
    }

    public function registros(){
        return $this->hasMany(Registro::class);
    }
}
