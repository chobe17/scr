<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Charts\SeguimientoDiario;
use App\Charts\MermasDiarias;

class Graficas extends Component
{
    public function render(SeguimientoDiario $chart,MermasDiarias $chart2)
    {
        return view('livewire.graficas', ['chart' => $chart->build(), 'chart2' => $chart2->build()]);
    }
}
