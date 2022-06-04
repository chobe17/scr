<?php

namespace App\Exports;

use App\Seguimiento;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SeguimientosExport implements FromCollection,WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            'Fecha de creacion',
            'Turno',
            'Maquina',
            'Merma',
            'Motivo de descarte',
            'Comentarios',
        ];
    }
    public function collection()
    {
         $seguimientos = DB::table('Seguimientos')->select('created_at','turno', 'maquina', 'merma', 'motivo_descarte', 'comentarios')->get();
         return $seguimientos;

    }
}