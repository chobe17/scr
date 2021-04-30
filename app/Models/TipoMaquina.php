<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoMaquina extends Model
{
    use HasFactory;

    protected $table = 'tipo_maquinas';
    protected $fillable = ['nombre_tipo'];
}
