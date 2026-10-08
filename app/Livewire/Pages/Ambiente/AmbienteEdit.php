<?php

namespace App\Livewire\Pages\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteEdit extends Component
{
    public $nome;
    public $descricao;
    public $status;
    public $ambienteId;

    public function mount($id){
        $ambiente = Ambiente::find($id);

        $this->ambienteId = $ambiente->id;
        $this->nome = $ambiente->nome;
        $this->descricao = $ambiente->descricao;
        $this->status = $ambiente->status;
    }

    public function update(){
        $ambiente = Ambiente::find($this->ambienteId);

        $ambiente->nome = $this->nome;
        $ambiente->descricao = $this->descricao;
        $ambiente->status = $this->status;

        $ambiente->save();

        session()->flash('success', 'Ambiente atualizado.');
        return redirect()->route('ambiente.index');
    }
    
    public function render()
    {
        return view('livewire.pages.ambiente.ambiente-edit');
    }
}
