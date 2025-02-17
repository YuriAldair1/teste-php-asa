<div>
    <div class=" p-4 my-5 shadow">

        <form wire:submit.prevent="update" action="post" class="d-grid gap-1">
            <x-input name="content.name" wire:model="content.name" type="text" label='Paciente' :hasError="$errors->has('content.name')" />
            <x-input name="content.cpf" id="cpf" wire:model="content.cpf" placeholder="000.000.000-00"
                type="text" maxlength="14" label='CPF' :hasError="$errors->has('cpf')"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')" />

            <x-date-input name="content.data_nasc" wire:model="content.data_nasc" label="Data de Nascimento" />

            <x-input name="content.email" wire:model.lazy="content.email" type="email" label='E-mail'
                :hasError="$errors->has('email')" />

            <div class="py-3">
                <x-button type="submit" variant="success">Salvar</x-button>
            </div>
        </form>
    </div>
</div>
