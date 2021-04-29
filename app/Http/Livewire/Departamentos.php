<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Departamento;

class Departamentos extends Component
{
	public $departamentos, $nombre, $departamento_id;
	public $isOpen = 0;

    public function render()
    {
    	$this->departamentos = Departamento::all();
        return view('livewire.departamentos');
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

    private function resetInputfields()
    {
    	$this->nombre = '';
    	$this->departamento_id = '';
    }

    public function store()
    {
    	$this->validate([
    		'nombre' => 'required'
    	]);

    	Departamento::updateOrCreate(['id' => $this->departamento_id], ['nombre' => $this->nombre]);

    	session()->flash('message', $this->departamento_id ? 'Departamento modificado con éxito.' : 'Departamento agregado con éxito.');

    	$this->closeModal();
    	$this->resetInputFields();
    }

    public function edit($id)
    {
    	$Departamento = Departamento::findOrFail($id);
    	$this->departamento_id = $id;
    	$this->nombre = $Departamento->nombre;

    	$this->openModal();
    }

    public function delete($id)
    {
    	Departamento::find($id)->delete();
    	session()->flash('message', 'Departamento eliminado exitosamente.');
    }
}
