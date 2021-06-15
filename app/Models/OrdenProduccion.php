<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrdenProduccion extends Model
{
    use HasFactory;

    protected $table = 'ordenes_produccion';
    protected $fillable = ['numero_orden', 'codigo_producto', 'descripcion_producto'];

}
