<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Models\Expedicion;
use App\Models\User;
use App\Models\OrdenProduccion;
use PDF;
use App\Exports\ExpedicionesExport;
use Maatwebsite\Excel\Facades\Excel;


class Expediciones extends Component
{
    public $isOpen = 0;

    public $expediciones, $expedicion_id, $numero_factura, $odc, $codigo_producto, $descripcion_producto, $clave, $cantidad_pallets, $cantidad_cajas, $total_cajas, $cantidad_piezas, $total_piezas, $numero_sello, $c_embarque, $a_tarima, $c_selladas, $i_lados, $l_embarque, $i_embarque, $peps, $c_factura, $observaciones;

    public $buscar_odc, $odcs;

    public $columns = [
        'created_at',
        'numero_factura',
        'odc',
        'codigo_producto',
        'descripcion_producto',
        'clave',
        'cantidad_pallets',
        'total_cajas',
        'total_piezas'
    ];

    public $sortColumn= "created_at";
    public $sortDirection = "desc";
    public $expediciones_imp="";
    public $consulta = '';

    public function render()
    {
        $buscar_odc = '%' . $this->buscar_odc . '%';
        $this->odcs = OrdenProduccion::where('numero_orden', 'like', $buscar_odc)->get();

        $this->codigo_producto = OrdenProduccion::where('numero_orden',$this->odc)->value('codigo_producto');
        $this->descripcion_producto = OrdenProduccion::where('numero_orden',$this->odc)->value('descripcion_producto');

        if($this->cantidad_pallets >= 0 && $this->cantidad_cajas >=0)
        {
            $this->total_cajas = ($this->cantidad_pallets * $this->cantidad_cajas);
        }
        else
        {
            $this->total_cajas = "";
        }
        if($this->cantidad_piezas >= 0 && $this->cantidad_cajas >=0)
        {
            $this->total_piezas = ($this->cantidad_piezas * $this->cantidad_cajas);
        }
        else
        {
            $this->total_piezas = "";
        }


        $this->expediciones = Expedicion::orderBy($this->sortColumn, $this->sortDirection)->get();
        
        $consulta = '%' . $this->consulta . '%';
        $this->expediciones = Expedicion::where('numero_factura', 'like', $consulta)
        ->orWhere('odc', 'like', $consulta)
        ->orWhere('codigo_producto', 'like', $consulta)
        ->orWhere('clave', 'like', $consulta)
        ->orderBy($this->sortColumn, $this->sortDirection)
        ->get();

        return view('livewire.expediciones');
    }


    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function resetInputFields()
    {
        $this->numero_factura = '';
        $this->odc = '';
        $this->buscar_odc = '';
        $this->codigo_producto = '';
        $this->descripcion_producto = '';
        $this->clave = '';
        $this->cantidad_pallets = '';
        $this->cantidad_cajas = '';
        $this->total_cajas = '';
        $this->cantidad_piezas = '';
        $this->total_piezas = '';
        $this->numero_sello = '';
        $this->c_embarque = '';
        $this->a_tarima = '';
        $this->c_selladas = '';
        $this->i_lados = '';
        $this->l_embarque = '';
        $this->i_embarque = '';
        $this->peps = '';
        $this->c_factura = '';
        $this->observaciones = '';

    }

    public function store()
    {
        Expedicion::updateOrCreate(['id' => $this->expedicion_id],
        [
            'numero_factura' => $this->numero_factura,
            'odc' => $this->odc,
            'codigo_producto' => $this->codigo_producto,
            'descripcion_producto' => $this->descripcion_producto,
            'clave' => $this->cantidad_pallets,
            'cantidad_cajas' => $this->cantidad_cajas,
            'total_cajas' => $this->total_cajas,
            'cantidad_piezas' => $this->cantidad_piezas,
            'total_piezas' => $this->total_piezas,
            'numero_sello' => $this->numero_sello,
            'c_embarque' => $this->c_embarque,
            'a_tarima' => $this->a_tarima,
            'c_selladas' => $this->c_selladas,
            'i_lados' => $this->i_lados,
            'l_embarque' => $this->l_embarque,
            'i_embarque' => $this->i_embarque,
            'peps' => $this->peps,
            'c_factura' => $this->c_factura,
            'observaciones' => $this->observaciones,
        ]);

        session()->flash('message', $this->merma_id ? 'Registro modificado exitosamente.' : 'Registro agregado exitosamente.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $expedicion = Expedicion::findOrFail($id);
        $this->expedicion_id = $expedicion->id;
        $this->numero_factura = $expedicion->numero_factura;
        $this->odc = $expedicion->odc;
        $this->codigo_producto = $expedicion->codigo_producto;
        $this->descripcion_producto = $expedicion->descripcion_producto;
        $this->clave = $expedicion->clave;
        $this->cantidad_pallets = $expedicion->cantidad_pallets;
        $this->cantidad_cajas = $expedicion->cantidad_cajas;
        $this->total_cajas = $expedicion->total_cajas;
        $this->cantidad_piezas = $expedicion->cantidad_piezas;
        $this->total_piezas = $expedicion->total_piezas;
        $this->numero_sello = $expedicion->numero_sello;
        $this->c_embarque = $expedicion->c_embarque;
        $this->a_tarima = $expedicion->a_tarima;
        $this->c_selladas = $expedicion->c_selladas;
        $this->i_lados = $expedicion->i_lados;
        $this->l_embarque = $expedicion->l_embarque;
        $this->peps = $expedicion->peps;
        $this->c_factura = $expedicion->c_factura;
        $this->observaciones = $expedicion->observaciones;


        $this->openModal();
    }

    public function delete($id)
    {
        Expedicion::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente.');
    }

    public function sort($column)
    {
        $this->sortColumn = $column;
        $this->sortDirection = $this->sortDirection == 'asc' ? 'desc' : 'asc';
    }

    public function imprimir()
    {

    }

    public function exportar()
    {

    }

}
