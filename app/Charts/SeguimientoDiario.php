<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Seguimiento;

class SeguimientoDiario
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $cfechas = Seguimiento::whereMaquina('CCM AJ')->limit(7)->pluck('created_at')->toArray();
        $fechas = [];
        $maquina = 'CCM AJ';
        $cmaquina = Seguimiento::whereMaquina($maquina)->limit(7)->pluck('merma')->toArray();


        foreach($cfechas as $cfecha)
        {
            array_push($fechas, $cfecha->day);
        }

        return $this->chart->lineChart()
            ->setTitle('Seguimientos de merma')
            ->setSubtitle($maquina) 
            ->addData('Merma', $cmaquina)
            ->setXAxis($fechas);
    }
}
