<div>
    {{-- The Master doesn't talk, he acts. --}}
    <table class="table table-hover shadow">
        <thead class="text-uppercase">
            <td>nome</td>
            <td>cpf</td>
            <td>data de nascimento</td>
            <td>e-mail</td>
            <td></td>
        </thead>
        <tbody>
            @foreach ($pacientes as $p)
                <tr>
                    <td>{{ $p->name }}</td>
                    <td>{{ preg_replace('/(\d{3})(\d{3})(\d{3})(\d{2})/', '$1.$2.$3-$4', $p->cpf) }}</td>
                    <td>
                        {{ \Carbon\Carbon::parse($p->data_nasc)->format('d-m-Y') }}
                    </td>
                    <td>{{ $p->email }}</td>
                    <td class=" d-flex justify-content-end">
                        <div class="d-flex mx-3">
                            <div class="mx-3">
                                <a href="{{ route('pacientes.edit', ['paciente' => $p->id]) }}"><i class="text-info hover"
                                        data-lucide="edit2"></i></a>
                            </div>
                            <div wire:click="delete({{ $p->id }})" class="border-0"><i class="text-danger hover"
                                    data-lucide="trash2"></i></div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
