<div class=" p-4 my-5 shadow">
    <form wire:submit.prevent="update" action="post">
        <x-input name="content.name" wire:model.lazy="content.name" type="text" label='médico' :hasError="$errors->has('content.name')" />
        <x-input name="content.crm" wire:model.lazy="content.crm" type="text" label="CRM" :hasError="$errors->has('content.crm')" />

            <x-select name="content.especialidade_id" wire:model.lazy="content.especialidade_id" label="Especialidades" :options="$especialidades" :selected="$content->especialidade_id"
                class="form-control" />
        <div class="py-2">
            <x-button type="submit" variant="success" :loading="false">Salvar</x-button>
        </div>
    </form>
</div>
