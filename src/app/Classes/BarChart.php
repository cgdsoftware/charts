<?php

namespace LaravelEnso\Charts\App\Classes;

class BarChart extends AbstractChart
{
    protected function buildChartData()
    {
        $colorIndex = 0;

        foreach ($this->datasets as $label => $dataset) {
            $this->data[] = [
                'label'           => $label,
                'backgroundColor' => $this->chartColors->getValueByKey($colorIndex),
                'data'            => $dataset,
            ];

            $colorIndex++;
        }
    }

    public function getResponse()
    {
        return [
            'labels'   => $this->labels,
            'datasets' => $this->data,
        ];
    }
}
