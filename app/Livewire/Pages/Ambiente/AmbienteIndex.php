<?php

namespace App\Livewire\Pages\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteIndex extends Component
{
    public function delete($id)
    {
        $ambiente = Ambiente::findOrFail($id);
        $ambiente->delete();

        session()->flash('success', 'Ambiente excluído com sucesso.');
    }
    
    public function render()
    {
        $ambientes = Ambiente::all();
        return view('livewire.pages.ambiente.ambiente-index', compact('ambientes'));
    }
}
