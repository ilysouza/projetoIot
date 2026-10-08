<?php

namespace App\Livewire\Pages\Registro;

use App\Models\Registro;
use Livewire\Component;

class RegistroIndex extends Component
{
    public function render()
    {
        $registros = Registro::all();
        return view('livewire.pages.registro.registro-index', compact('registros'));
    }
}
