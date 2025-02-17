<?php

namespace App\Http\Livewire\Pacientes;

use App\paciente;
use Livewire\Component;


class Edit extends Component
{
    public $content;

    public $rules = [
        'content.name' => 'required',
        'content.email' => 'required',
        'content.cpf' => 'required',
        'content.data_nasc' => 'required',
        
    ];
    public function update() {
        
        sleep(1);
        $this->validate([
            'content.name' => 'required|string|max:255',
        ]);
    
        $this->content->save();
    
        session()->flash('message', 'Especialidade atualizada com sucesso!');
        return redirect()->route('pacientes.edit',$this->content->id);

    }
    public function mount(paciente $paciente)
    {
        $this->content = $paciente;
        $this->content->data_nasc = date('Y-m-d', strtotime($this->content['data_nasc']));

    }
    public function render()
    {
        return view('livewire.pacientes.edit');
    }
}
