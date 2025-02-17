<div>
    <div class=" p-4 my-5 shadow">
        <form wire:submit.prevent="create" action="post">
            <x-input name="especialidade" wire:model.lazy="especialidade" type="text" label='especialidade'
                :hasError="$errors->has('especialidade')" />
            <x-button type="submit" variant="success" >Salvar</x-button>
        </form>
    </div>
</div>
