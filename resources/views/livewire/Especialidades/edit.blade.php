<div class=" p-4 my-5 shadow">    
    <form wire:submit.prevent="update" action="post">
        <x-input name="new_name" value='content.name' wire:model.defer='content.name' type="text" label='Especialidade'
            :hasError="$errors->has('content.name')" />
        <x-button type="submit" variant="success">Salvar</x-button>
    </form>
</div>
