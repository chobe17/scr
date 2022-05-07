<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Seguimiento;
use App\Models\Maquina;

use Illuminate\Support\Facades\DB;

class Seguimientos extends Component
{
    public $seguimientos, $seguimiento_id, $turno, $maquina, $merma, $motivo_descarte, $comentarios;

    public $maquinas, $motivos_descartes, $isOpen;

    public function render()
    {
        $this->seguimientos = Seguimiento::all();
        $this->maquinas = Maquina::all();
        $this->motivos_descartes = DB::table('motivos_descartes')->get();

        return view('livewire.seguimientos');
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
        $this->turno = '';
        $this->maquina = '';
        $this->merma = '';
        $this->motivo_descarte = '';
        $this->comentarios = '';
    }

    public function store()
    {
        $this->validate([
            'turno' => 'required',
            'maquina' => 'required',
            'merma' => 'required',
            'motivo_descarte' => 'required',
              
        ]);

        Seguimiento::updateOrCreate(['id' => $this->seguimiento_id], 
            [
                'turno' => $this->turno,
                'maquina' => $this->maquina,
                'merma' => $this->merma,
                'motivo_descarte' => $this->motivo_descarte,
                'comentarios' => $this->comentarios,
            ]);

        session()->flash('message', $this->seguimiento_id ? 'Registro modificado con éxito.' : 'Registro agregado con éxito.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $Seguimiento = Seguimiento::findOrFail($id);
        $this->seguimiento_id = $id;
        $this->turno = $Seguimiento->turno;
        $this->maquina = $Seguimiento->maquina;
        $this->merma = $Seguimiento->merma;
        $this->motivo_descarte = $Seguimiento->motivo_descarte;
        $this->comentarios = $Seguimiento->comentarios;        

        $this->openModal();
    }

    public function delete($id)
    {
        Seguimiento::find($id)->delete();
        session()->flash('message', 'Registro eliminado exitosamente.');
    }


}
