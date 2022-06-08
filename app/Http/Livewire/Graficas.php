<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Charts\SeguimientoDiario;

class Graficas extends Component
{
    public function render(SeguimientoDiario $chart)
    {
        return view('livewire.graficas', ['chart' => $chart->build()]);
    }
}
