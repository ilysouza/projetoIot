<?php

namespace App\Livewire\Pages\Ambiente;

use App\Models\Ambiente;
use Livewire\Component;

class AmbienteCreate extends Component
{

    public $nome;
    public $descricao;
    public $status;

    public function store()
    {
        $this->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'status' => 'required',
        ], [
            'nome.required' => 'O nome é obrigatório.',
            'nome.max:255' => 'O máximo de caracteres é 255.',
            'status' => 'O status é obrigatório.'
        ]);

        Ambiente::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'status' => $this->status,
        ]);

        session()->flash('success', 'Ambiente cadastrado.');

        return redirect()->route('ambiente.index');
    }

    public function render()
    {
        return view('livewire.pages.ambiente.ambiente-create');
    }
}
