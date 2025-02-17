<div>
    <table class="table table-hover rounded-md shadow">
        <thead class="text-uppercase">
            <td>Médico</td>
            <td>Especialidade</td>
            <td>Dt. Atendimento</td>
            <td>Paciente</td>
            <td>Documento</td>
            <td></td>
        </thead>
        <tbody>
            @foreach ($atendimentos as $a)
                <tr>
                    <td>{{ $a->medico->name }}</td>
                    <td>{{ $a->medico->especialidade->name }}</td>
                    <td>{{ \Carbon\Carbon::parse($a->data_atendimento)->format('d-m-Y') }}</td>
                    <td>{{ $a->paciente->name }}</td>
                    <td>{{ $a->paciente->cpf }}</td>
                    <td class=" d-flex justify-content-end">
                        <div class="d-flex mx-3">
                            
                            <div wire:click="delete({{ $a->id }})" class="border-0"><i class="text-danger hover"
                                    data-lucide="trash2"></i></div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
