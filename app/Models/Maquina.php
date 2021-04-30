<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
    use HasFactory;

    protected $table = 'maquinas';
    protected $fillable = ['nombre', 'tipo_maquina', 'linea', 'capacidad'];

}
