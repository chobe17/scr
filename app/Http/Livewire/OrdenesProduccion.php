<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\OrdenProduccion;

class OrdenesProduccion extends Component
{

    public $ordenes_produccion, $numero_orden, $codigo_producto, $descripcion_producto, $op_id;
    public $isOpen = 0;

    public function render()
    {
        $this->ordenes_produccion = OrdenProduccion::all();
        return view('livewire.ordenes-produccion');
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

    private function resetInputFields()
    {
        $this->numero_orden = '';
        $this->codigo_producto = '';
        $this->descripcion_producto = '';
    }

    public function store()
    {
        $this->validate([
            'numero_orden' => 'required',
            'codigo_producto' => 'required',
            'descripcion_producto' => 'required'
        ]);

        OrdenProduccion::updateOrCreate(['id' => $this->op_id], ['numero_orden' => $this->numero_orden, 'codigo_producto' => $this->codigo_producto,    'descripcion_producto' => $this->descripcion_producto]);

        session()->flash('message', $this->op_id ? 'Orden modificada exitosamente.' : 'Orden agregada exitosamente.');

    $this->closeModal();
    $this->resetInputFields();

    }

public function edit($op_id)
{
    $orden_produccion = OrdenProduccion::findOrfail($op_id);
    $this->op_id = $orden_produccion->id;
    $this->numero_orden = $orden_produccion->numero_orden;
    $this->codigo_producto = $orden_produccion->codigo_producto;
    $this->descripcion_producto = $orden_produccion->descripcion_producto;

    $this->openModal();
}

public function delete($op_id)
{
    OrdenProduccion::find($op_id)->delete();
    session()->flash('message', 'Orden eliminada correctamente.');
}

}