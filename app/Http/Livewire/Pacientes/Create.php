<?php

namespace App\Http\Livewire\Pacientes;

use Livewire\Component;
use App\paciente;

class Create extends Component
{
    public $cpf;
    public $name;
    public $data_nasc;
    public $email;

    protected $rules = [
        'cpf' => 'required|formato_cpf', // Regra customizada
        'name' => 'required', // Regra customizada
        'email' => 'required', // Regra customizada
        'data_nasc' => 'required', // Regra customizada
    ];

    protected $messages = [
        'cpf.required' => 'O CPF é obrigatório.',
        'cpf.formato_cpf' => 'O CPF fornecido é inválido.',
        'name.required' => 'É obrigatório.',
        'email.required' => 'É obrigatório.',
        'data_nasc.required' => 'É obrigatório.',
    ];

    public function boot()
    {
        // Registra regra de validação customizada
        \Illuminate\Support\Facades\Validator::extend('formato_cpf', function ($attribute, $value, $parameters, $validator) {
            return $this->isValidCpf($value);
        });
    }

    public function formatCpf()
    {
        $cpf = preg_replace('/[^0-9]/', '', $this->cpf);

        if (strlen($cpf) <= 11) {
            $this->cpf = preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $cpf);
        }
    }

    public function isValidCpf($cpf)
    {
        // Remove caracteres não numéricos
        $cpf = preg_replace('/\D/', '', $cpf);

        // Verifica se tem 11 dígitos
        if (strlen($cpf) != 11) {
            return false;
        }

        // Verifica se todos os dígitos são iguais
        if (preg_match('/^(\d)\1+$/', $cpf)) {
            return false;
        }

        // Calcula os dígitos verificadores
        for ($i = 9; $i < 11; $i++) {
            $sum = 0;
            for ($j = 0; $j < $i; $j++) {
                $sum += intval($cpf[$j]) * (($i + 1) - $j);
            }

            $remainder = $sum % 11;
            $digit = $remainder < 2 ? 0 : 11 - $remainder;

            if ($digit != intval($cpf[$i])) {
                return false;
            }
        }

        return true;
    }

    public function updatedCpf()
    {
        // Remove tudo exceto números para validação
        $numericCpf = preg_replace('/\D/', '', $this->cpf);

        // Só valida se tiver 11 dígitos
        if (strlen($numericCpf) == 11) {
            $this->validate();
        }

        // Formata o CPF
        $this->formatCpf();
    }

    public function create()
    {
        $this->validate();
        // Aqui você pode adicionar a lógica para salvar o paciente
        // Por exemplo:
        
        paciente::create([
            'cpf' => preg_replace('/\D/', '', $this->cpf),
            'name' => $this->name,
            'email' => $this->email,
            'data_nasc' => $this->data_nasc
        ]);

        session()->flash('message', 'Paciente cadastrado com sucesso!');
        return redirect()->route('pacientes.novo');
    }

    public function render()
    {
        return view('livewire.pacientes.create');
    }
}
