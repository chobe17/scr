<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Linea;

class Lineas extends Component
{
	public $lineas, $nombre, $descripcion, $linea_id;
	public $isOpen = 0;
    public $consulta = '';

    public function render()
    {
    	$consulta = '%' . $this->consulta . '%';
        $this->lineas = Linea::where('nombre', 'like', $consulta)
        ->orWhere('descripcion', 'like', $consulta)
        ->get();
        return view('livewire.lineas');
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
    	$this->nombre = '';
    	$this->descripcion = '';
    	$this->linea_id = '';
    }

    public function store()
    {
    	$this->validate([
    		'nombre' => 'required',
    		'descripcion' => 'required'
    	]);

    	Linea::updateOrCreate(['id' => $this->linea_id], ['nombre' => $this->nombre,
    		'descripcion' => $this->descripcion
    	]);

    	session()->flash('message', $this->linea_id ? 'Linea modificada exitosamente.' : 'Linea agregada exitosamente.');

    	$this->closeModal();
    	$this->resetInputFields();
    }

    public function edit($id)
    {
    	$Linea = Linea::findOrFail($id);
    	$this->linea_id = $id;
    	$this->nombre = $Linea->nombre;
    	$this->descripcion = $Linea->descripcion;

    	$this->openModal();
    }

    public function delete($id)
    {
    	Linea::find($id)->delete();
    	session()->flash('message', 'Linea eliminada correctamente.');
    }

}
