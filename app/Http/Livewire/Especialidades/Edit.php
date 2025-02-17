<?php

namespace App\Http\Livewire\Especialidades;

use Livewire\Component;
use SebastianBergmann\LinesOfCode\Counter;
use App\especialidades;

class Edit extends Component
{
    public $content;
    

    public $rules =[
        'content.name' => 'required',
    ];

    public function mount(especialidades $especialidade) {
        $this->content = $especialidade;
        
    }

    public function update() {
        sleep(1);
        $this->validate([
            'content.name' => 'required|string|max:255',
        ]);
    
        $this->content->save();
    
        session()->flash('message', 'Especialidade atualizada com sucesso!');
        return redirect()->route('medicos.especialidades.edit',$this->content->id);

    }
    

    public function render()
    {
        
        return view('livewire.especialidades.edit');
    }

    
}
