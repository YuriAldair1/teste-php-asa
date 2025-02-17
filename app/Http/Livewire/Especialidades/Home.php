<?php

namespace App\Http\Livewire\Especialidades;

use Livewire\Component;

use App\especialidades;

class Home extends Component
{
    public $especialidades;
    public function render()
    {
        $this->performQuery();
        return view('livewire.especialidades.home',['especialidade', $this->especialidades]);
        ;
    }

    public function delete($e)
    {
        $query = especialidades::where('id', $e)->firstOrFail();
        $query->delete();

        session()->flash('message', 'Deletado com sucesso!');
        return redirect()->route('especialidades.home');
    }

    

    private function performQuery(): void
    {

        $query = especialidades::get();

        $this->especialidades = $query;
    }
    
}
