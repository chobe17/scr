<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\MermaDiaria;

class MermasDiarias
{
    protected $chart2;

    public function __construct(LarapexChart $chart)
    {
        $this->chart2 = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
        $cfechas = MermaDiaria::limit(7)->pluck('created_at')->toArray();
        $fechas = [];
        $mermas = MermaDiaria::limit(7)->pluck('merma')->toArray();


        foreach($cfechas as $cfecha)
        {
            array_push($fechas, $cfecha->day);
        }

        return $this->chart2->lineChart()
            ->setTitle('Merma diaria')
            ->setSubtitle('Semana 23') 
            ->addData('Merma', $mermas)
            ->setXAxis($fechas)
            ->setColors(['#ff6384','#ffc63b']);

    }
}
