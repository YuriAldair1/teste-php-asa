<?php

namespace App\Http\Livewire\Especialidades;

use Livewire\Component;
use App\especialidades;

class Create extends Component
{
    public $especialidade;

    protected $rules = [
        'especialidade' => 'required',

    ];
    protected $messages = [
        'especialidade.required' => 'Nome da especialidade é Obrigatorio.',
    ];

    public function create()
    {
        sleep(1);
        $this->validate();
        especialidades::create([
            'name' => $this->especialidade,
        ]);
        session()->flash('message', 'Especialidade criada com sucesso!');
        return redirect()->route('medicos.especialidades.novo');
    }
    public function render()
    {
        return view('livewire.especialidades.create');
    }
}
