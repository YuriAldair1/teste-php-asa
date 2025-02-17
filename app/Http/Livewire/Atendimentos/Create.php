<?php

namespace App\Http\Livewire\Atendimentos;

use Livewire\Component;
use App\Medicos;
use App\paciente;
use App\atendimentos;

class Create extends Component
{
    public $medicos;
    public $pacientes;
    public $medico_id;
    public $paciente_id;
    public $data_atendimento;
    protected $rules = [
        'medico_id' => 'required',
        'paciente_id' => 'required',
        'data_atendimento' => 'required',
        'pacientes' => 'required',
    ];
    protected $messages = [
        'medico_id.required' => 'Selecione o Médico.',
        'paciente_id.required' => 'Selecione o Paciente.',
        'data_atendimento.required' => 'Data do atendimento é obrigatório.',
    ];

    public function create()
    {

        sleep(1);
        $this->validate();
        
        atendimentos::create([
            'data_atendimento' => $this->data_atendimento,
            'medico_id' => $this->medico_id,
            'paciente_id' => $this->paciente_id,
        ]);
        session()->flash('message', 'Atendimento Registrado com sucesso!');
        return redirect()->route('atendimentos.novo');
    }
    public function mount()
    {
        $this->performQuery();
    }
    public function render()
    {
        return view('livewire.atendimentos.create');
    }
    private function performQuery(): void
    {
        $this->medicos = Medicos::get();
        $this->pacientes = paciente::get();
    }
}
