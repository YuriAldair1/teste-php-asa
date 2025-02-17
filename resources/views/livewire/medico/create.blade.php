<div>
    {{-- Success is as dangerous as failure. --}}
    <div class=" p-4 my-5 shadow">

        <form wire:submit.prevent="create" action="post">
            <x-input name="medico" wire:model.lazy="medico" type="text" label='médico' :hasError="$errors->has('medico')"/>
            <x-input name="crm" wire:model.lazy="crm" type="text" label='CRM' :hasError="$errors->has('crm')" />
                <x-select name="especialidade_id" wire:model.lazy="especialidade_id" label="Especialidades" :options="$especialidades"
                    class="form-control" />
            {{-- <x-button variant="success" :loading="true">Salvar</x-button> --}}
            <x-button type="submit" variant="success" :loading="false">Salvar</x-button>
        </form>
    </div>
</div>
