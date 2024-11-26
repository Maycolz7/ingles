<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Matricula extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'Estado',
        'Registro_id',
    ];

    public function registros(){
        return $this->belongsTo(Registro::class);
    }

    public function grupo(){
        return $this->belongsTo(Grupo::class);
    }

    public function usuario(){
        return $this->belongsTo(User::class, 'Registro_id');
    }
}
