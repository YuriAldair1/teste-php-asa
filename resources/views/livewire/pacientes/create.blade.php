<div>
    {{-- Success is as dangerous as failure. --}}
    <div class=" p-4 my-5 shadow">
        <form wire:submit.prevent="create" action="post" class="d-grid gap-1">
            <x-input name="name" wire:model.lazy="name" type="text" label='Paciente' :hasError="$errors->has('paciente')" />
            <x-input name="cpf" id="cpf" wire:model="cpf" placeholder="000.000.000-00" type="text"
                maxlength="14" label='CPF' :hasError="$errors->has('cpf')"
                oninput="this.value = this.value.replace(/[^0-9]/g, '')" />

            <x-date-input name="data_nasc" wire:model="data_nasc" label="Data de Nascimento" />

            <x-input name="email" wire:model.lazy="email" type="email" label='E-mail' :hasError="$errors->has('email')" />

            <div class="py-3">
                <x-button type="submit" variant="success">Salvar</x-button>
            </div>
        </form>
    </div>
</div>
