<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merma extends Model
{
    use HasFactory;

    protected $table = 'mermas';
    protected $fillable = [


        'linea',
        'maquina',
        'tipo_maquina',
        'tintas',
        'codigo_analista',
        'nombre_analista',
        'turno',
        'grupo',
        'produccion',
        'merma',
        'rechazados',
        'motivo_descarte',
        'comentarios',
        'codigo_operador',
        'orden_produccion',
        'codigo_producto',
        'descripcion_producto',
        'confirmado',

    ];
}
