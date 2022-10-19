<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pregunta extends Model
{
    use HasFactory;

    protected $table = "preguntas";

    protected $fillable = ['punot', 'nivel', 'intento', 'numero_pregunta'];
    protected $hidden = ['id','user_id'];

    public function obtenerAPregunta()
        {
            return Pregunta::all();
        }

    public function obtenerPreguntaPorId($id)
        {
            return Pregunta::find($id);
        }

}
