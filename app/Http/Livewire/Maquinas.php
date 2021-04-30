<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Maquina;
use App\Models\TipoMaquina;
use App\Models\Linea;


class Maquinas extends Component
{
    public $maquinas, $nombre, $tipo_maquina, $linea, $capacidad, $maquina_id;
    public $tmaquinas, $tlineas;
	public $isOpen = 0;

    public function render()
    {
    	$this->maquinas = Maquina::all();
    	$this->tmaquinas = TipoMaquina::all();
    	$this->tlineas = Linea::all();
        return view('livewire.maquinas');
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
    	$this->tipo_maquina = '';
    	$this->linea = '';
    	$this->capacidad = '';
    	$this->maquina_id = '';
    }

    public function store()
    {
    	$this->validate([
    		'nombre' => 'required',
    		'tipo_maquina' => 'required',
    		'linea' => 'required',
            'capacidad' => 'required'
    	]);

    	Maquina::updateOrCreate(['id' => $this->maquina_id], ['nombre' => $this->nombre,
    		'tipo_maquina' => $this->tipo_maquina, 'linea' => $this->linea, 'capacidad' => $this->capacidad,
    	]);

    	session()->flash('message', $this->maquina_id ? 'Maquina agregada exitosamente.' : 'Maquina modificada exitosamente.');

    	$this->closeModal();
    	$this->resetInputFields();
    }

    public function edit($id)
    {
    	$Maquina = Maquina::findOrFail($id);
    	$this->maquina_id = $id;
    	$this->nombre = $Maquina->nombre;
    	$this->tipo_maquina = $Maquina->tipo_maquina;
    	$this->linea = $Maquina->linea;
    	$this->capacidad = $Maquina->capacidad;

    	$this->openModal();
    }

    public function delete($id)
    {
    	Maquina::find($id)->delete();
    	session()->flash('message', 'maquina eliminada correctamente.');
    }
}
