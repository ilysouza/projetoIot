<?php

namespace App\Livewire\Pages\Sensor;

use App\Models\Sensor;
use Livewire\Component;

class SensorIndex extends Component
{
    public function render()
    {
        $sensores = Sensor::all();
        return view('livewire.pages.sensor.sensor-index', compact('sensores'));
    }
}
