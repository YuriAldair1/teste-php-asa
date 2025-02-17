<?php

namespace App\Http\Livewire\Medico;

use Livewire\Component;
use App\Medicos;
use App\especialidades;

class Edit extends Component
{
    public $content;
    public $especialidades;

    public $rules = [
        'content.name' => 'required',
        'content.crm' => 'required',
        'content.especialidade_id' => 'required',
    ];

    public function mount(Medicos $medico)
    {
        $this->content = $medico;

        $this->performQuery();
    }

    public function update()
    {
        sleep(1);
        $this->validate([
            'content.name' => 'required|string|max:255',
        ]);

        $this->content->save();

        session()->flash('message', 'Especialidade atualizada com sucesso!');
        return redirect()->route('medicos.edit', $this->content->id);
    }
    public function render()
    {
        return view('livewire.medico.edit');
    }
    private function performQuery(): void
    {

        
        $query_esp = especialidades::get();
        $this->especialidades = $query_esp;

    }
}
