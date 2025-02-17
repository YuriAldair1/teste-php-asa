<div class=" p-4 my-5 shadow">
    <form wire:submit.prevent="create" action="post" class="d-grid gap-2">
        <x-select name="medico_id" wire:model.lazy="medico_id" label="Médicos" :options="$medicos" class="form-control" :hasError="$errors->has('medico_id')" />
        <x-select name="paciente_id" wire:model.lazy="paciente_id" label="Paciente" :options="$pacientes" class="form-control" :hasError="$errors->has('paciente_id')" />
        <x-date-input name="data_atendimento" wire:model="data_atendimento" label="Data do Atendimento" :hasError="$errors->has('data_atendimento')" />
        <div class="py-2">
            <x-button type="submit" variant="success" :loading="false">Salvar</x-button>
        </div>
    </form>
</div>
