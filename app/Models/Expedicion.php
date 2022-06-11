<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expedicion extends Model
{
    use HasFactory;

    protected $table = 'expediciones';
    protected $fillable = [
        'numero_factura',
        'odc',
        'codigo_producto',
        'descripcion_producto',
        'clave',
        'cantidad_pallets',
        'cantidad_cajas',
        'total_cajas',
        'cantidad_piezas',
        'total_piezas',
        'numero_sello',
        'c_embarque',
        'a_tarima',
        'c_selladas',
        'i_lados',
        'l_embarque',
        'i_embarque',
        'peps',
        'c_factura',
        'observaciones',
    ];
}
