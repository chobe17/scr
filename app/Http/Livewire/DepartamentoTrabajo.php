<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Departamento;

class DepartamentoTrabajo extends Component
{
	public $areas;

	public function mount()
	{
		$this->areas  = Departamento::all();
	}

    public function render()
    {
        return view('livewire.departamento-trabajo');
    }
}
