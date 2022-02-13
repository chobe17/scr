<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use App\Models\Merma;
use App\Models\Maquina;
use App\Models\User;
use App\Models\OrdenProduccion;



class Mermas extends Component
{

    public $M, $mermas, $merma_id, $maquinas, $analistas, $grupos, $motivos_descartes, $operadores, $ordenes_produccion;

    public $mlinea, $mmaquina_id, $mmaquina, $mtipo_maquina, $mtintas, $mcodigo_analista, $mnombre_analista, $mturno, $mgrupo, $mproduccion, $mmerma, $mrechazados, $mmotivo_descarte,$mcomentarios, $mcodigo_operador, $morden_produccion, $mcodigo_producto, $mdescripcion_producto, $mconfirmado, $buscar_odc, $odcs;

    public $isOpen = 0;

    public function render()
    {

        $this->mermas = Merma::all();
        $this->maquinas = Maquina::all();

        $this->analistas = DB::table('users')->where('area',5)->get();
        $this->grupos = DB::table('grupos')->get();
        $this->motivos_descartes = DB::table('motivos_descartes')->get();
        $this->operadores = DB::table('users')->where('area',4)->get();
        $this->ordenes_produccion = OrdenProduccion::All();

        $buscar_odc = '%' . $this->buscar_odc . '%';
        $this->odcs = OrdenProduccion::where('numero_orden', 'like', $buscar_odc)->get();

        if($this->mmaquina_id != null)
        {
            $this->mmaquina = Maquina::where('id',$this->mmaquina_id)->value('nombre');
            $this->mlinea = Maquina::where('id',$this->mmaquina_id)->value('linea');
            $this->mtipo_maquina = Maquina::where('id',$this->mmaquina_id)->value('tipo_maquina');
        }
        else
        {
            $this->mmaquina = "";
            $this->mlinea = "";
            $this->mtipo_maquina = "";
        }

        if($this->mcodigo_analista != null)
        {
            $this->mnombre_analista = User::where('id',$this->mcodigo_analista)->value('name');
        }
        else
        {
            $this->mnombre_analista = "";
        }

        if($this->mproduccion >= 0 && $this->mmerma >=0)
        {
            $this->mrechazados = round(($this->mproduccion * $this->mmerma)/1000);
        }
        else
        {
            $this->mrechazados = "";
        }

        if($this->morden_produccion != null)
        {
            $this->mcodigo_producto = OrdenProduccion::where('numero_orden',$this->morden_produccion)->value('codigo_producto');
        }

        if($this->mtintas == null)
        {
            $this->mtintas = "N/A";
        }



        

        return view('livewire.mermas');
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
        $this->mlinea = '';
        $this->mmaquina = '';
        $this->mtipo_maquina = '';
        $this->mtintas = '';
        $this->mcodigo_analista = '';
        $this->mnombre_analista = '';
        $this->mturno = '';
        $this->mgrupo = '';
        $this->mproduccion = '';
        $this->mmerma = '';
        $this->mrechazados = '';
        $this->mmotivo_descarte = '';
        $this->mcomentarios = '';
        $this->mcodigo_operador = '';
        $this->morden_produccion = '';
        $this->mcodigo_producto = '';
        $this->mdescripcion_producto = '';
        $this->merma_id = '';
    }

    public function store()
    {

        $this->validate([
            'mnombre_analista' => 'required',
            'mturno' => 'required',
            'mgrupo' => 'required',
            'mmaquina' => 'required',
            'morden_produccion' => 'required',
            'mproduccion' => 'required',
            'mmerma' => 'required',
            'mrechazados' => 'required',
            'mcodigo_operador' => 'required',
            'mmotivo_descarte' => 'required',
        ]);

        Merma::updateOrCreate(['id' => $this->merma_id],
        [
            'linea' => $this->mlinea,
            'maquina' => $this->mmaquina,
            'tipo_maquina' => $this->mtipo_maquina,
            'tintas' => $this->mtintas,
            'codigo_analista' => $this->mcodigo_analista,
            'nombre_analista' => $this->mnombre_analista,
            'turno' => $this->mturno,
            'grupo' => $this->mgrupo,
            'produccion' => $this->mproduccion,
            'merma' => $this->mmerma,
            'rechazados' => $this->mrechazados,
            'motivo_descarte' => $this->mmotivo_descarte,
            'comentarios' => $this->mcomentarios,
            'codigo_operador' => $this->mcodigo_operador,
            'orden_produccion' => $this->morden_produccion,
            'codigo_producto' => $this->mcodigo_producto,
            'descripcion_producto' => $this->mdescripcion_producto,
            'confirmado' => false,
        ]);

        session()->flash('message', $this->merma_id ? 'Registro modificado exitosamente.' : 'Registro agregado exitosamente.');

        $this->closeModal();
        $this->resetInputFields();

    }

    public function edit($id)
    {
        $Merma = Merma::findOrFail($id);
        $this->merma_id = $Merma->id;
        $this->mlinea = $Merma->linea;
        $this->mmaquina = $Merma->maquina;
        $this->mtipo_maquina = $Merma->tipo_maquina;
        $this->mtintas = $Merma->tintas;
        $this->mcodigo_analista = $Merma->mcodigo_analista;
        $this->mnombre_analista = $Merma->mnombre_analista;
        $this->mturno = $Merma->turno;
        $this->mgrupo = $Merma->grupo;
        $this->mproduccion = $Merma->produccion;
        $this->mmerma = $Merma->merma;
        $this->mrechazados = $Merma->rechazados;
        $this->mmotivo_descarte = $Merma->motivo_descarte;
        $this->mcomentarios = $Merma->comentarios;
        $this->mcodigo_operador = $Merma->codigo_operador;
        $this->morden_produccion = $Merma->orden_produccion;
        $this->mcodigo_producto = $Merma->codigo_producto;
        $this->mdescripcion_producto = $Merma->descripcion_producto;


        $this->openModal();
    }

    public function delete($id)
    {
        Merma::find($id)->delete();
        session()->flash('message', 'Registro eliminado correctamente.');
    }

}
