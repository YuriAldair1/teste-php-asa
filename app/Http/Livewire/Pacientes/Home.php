<?php

namespace App\Http\Livewire\Pacientes;

use Livewire\Component;
use App\paciente;

class Home extends Component
{
    public $pacientes;

    public function render()
    {
        $this->performQuery();
        return view('livewire.pacientes.home');
    }

    public function delete($e)
    {
        $query = paciente::where('id', $e)->firstOrFail();
        $query->delete();

        session()->flash('message', 'Deletado com sucesso!');
        return redirect()->route('pacientes.home');
    }
    private function performQuery(): void
    {

        $query = paciente::get();

        $this->pacientes = $query;
    }
}
