<?php

namespace App\Http\Livewire\Medico;

use Livewire\Component;
use App\Medicos;
use App\especialidades;

class Home extends Component
{
    public $medicos;
    public $especialidades;
    public function render()
    {
        $this->performQuery();

        return view('livewire.medico.home', [
            'medicos' => $this->medicos,
        ]);
    }

    public function delete($e)
    {
        $query = Medicos::where('id', $e)->firstOrFail();
        $query->delete();

        session()->flash('message', 'Deletado com sucesso!');
        return redirect()->route('medicos.home');
    }

    private function performQuery(): void
    {

        $query = Medicos::get();

        $this->medicos = $query;

    }
}
