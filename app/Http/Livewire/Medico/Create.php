<?php

namespace App\Http\Livewire\Medico;

use Livewire\Component;
use App\Medicos;
use App\especialidades;

class Create extends Component
{
    public $medico;
    public $crm;
    public $especialidades;
    public $especialidade_id;


    protected $rules = [
        'medico' => 'required',
        'crm' => 'required',
        'especialidade_id' => 'required',

    ];
    protected $messages = [
        'medico.required' => 'Nome do Médico é Obrigatorio.',
        'crm.required' => 'CRM do Médico é Obrigatorio.',
        'especialidade_id.required' => 'Selecione uma especialidade.',
    ];
    public function mount()
    {
        $this->performQuery();
    }
    public function create()
    {
        sleep(1);
        $this->validate();

        Medicos::create([
            'name' => $this->medico,
            'crm' => $this->crm,
            'especialidade_id' => 1,
        ]);

        session()->flash('message', 'Médico Cadastrado com sucesso!');
        return redirect()->route('medicos.novo');
    }
    public function render()
    {
        return view('livewire.medico.create');
    }
    private function performQuery(): void
    {
        $this->especialidades = especialidades::get();
    }
}
