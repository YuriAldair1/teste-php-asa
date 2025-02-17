<?php

namespace App\Http\Livewire\Atendimentos;

use App\atendimentos;
use Livewire\Component;

class Home extends Component
{
    public $atendimentos;

    public function mount()
    {
        $this->performQuery();
    }
    public function render()
    {
        return view('livewire.atendimentos.home');
    }

    public function delete($e)
    {
        $query = atendimentos::where('id', $e)->firstOrFail();
        $query->delete();

        session()->flash('message', 'Deletado com sucesso!');
        return redirect()->route('atendimentos.novo');
    }
    private function performQuery(): void
    {
        $this->atendimentos = atendimentos::get();
    }
}
