<?php

namespace App\Exports;

use App\Merma;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MermasExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
     public function headings(): array
    {
        return [
        'Fecha',
        'Linea',
        'Maquina',
        'Tipo_maquina',
        'Tintas',
        'Codigo_analista',
        'Nombre_analista',
        'Turno',
        'Grupo',
        'Produccion',
        'Merma',
        'Rechazados',
        'Motivo_descarte',
        'Comentarios',
        'Codigo_operador',
        'Orden_produccion',
        'Codigo_producto',
        'Descripcion_producto',
        ];
    }
    public function collection()
    {
         $mermas = DB::table('Mermas')->select('created_at','linea', 'maquina', 'tipo_maquina', 'tintas', 'codigo_analista', 'nombre_analista', 'turno', 'grupo', 'produccion', 'merma', 'rechazados', 'motivo_descarte', 'comentarios', 'codigo_operador', 'orden_produccion', 'codigo_producto', 'descripcion_producto')->get();
         return $mermas;

    }
}