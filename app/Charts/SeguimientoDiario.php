<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Seguimiento;
use App\Models\User;

class SeguimientoDiario
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
    $fechas = Seguimiento::whereMaquina('CCM AJ')->limit(6)->pluck('turno')->toArray();
        return $this->chart->lineChart()
            ->setTitle('Seguimientos de merma')
            ->setSubtitle('CCM AJ') 
            ->addData('Merma', Seguimiento::whereMaquina('CCM AJ')->limit(6)->pluck('merma')->toArray())
            ->setXAxis($fechas);
    }
}
