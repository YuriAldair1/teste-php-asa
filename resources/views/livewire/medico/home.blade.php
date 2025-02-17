<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <table class="table table-hover shadow">
        <thead class="text-uppercase">
            <td>nome</td>
            <td>crm</td>
            <td>especialidade</td>
            <td></td>
        </thead>
        <tbody>
            @foreach ($medicos as $medico)
                <tr>
                    <td>{{ $medico->name }}</td>
                    <td>{{ $medico->crm }}</td>
                    <td><div class="badge bg-success p-1 px-2">{{ $medico->especialidade->name }}</div></td>
                    <td class=" d-flex justify-content-end">
                        <div class="d-flex mx-3">
                            <div class="mx-3">
                                <a href="{{ route('medicos.edit', ['slug' => $medico->id]) }}"><i class="text-info hover"
                                        data-lucide="edit2"></i></a>
                            </div>
                            <div wire:click="delete({{ $medico->id }})" class="border-0"><i class="text-danger hover"
                                    data-lucide="trash2"></i></div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>
