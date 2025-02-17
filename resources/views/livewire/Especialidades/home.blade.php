<div class="py-5">
    <table class="table table-hover shadow">
        <thead class="text-uppercase">
            <td>nome</td>
            <td>&nbsp;</td>
        </thead>
        <tbody>
            @foreach ($especialidades as $e)
                <tr>
                    <td>{{ $e->name }}</td>
                    <td class=" d-flex justify-content-end">
                        <div class="d-flex mx-3">
                            <div class="mx-3">
                                <a href="{{ route('medicos.especialidades.edit', ['slug' => $e->id]) }}"><i
                                        class="text-info hover" data-lucide="edit2"></i></a>
                            </div>
                            <div wire:click="delete({{ $e->id }})" class="border-0"><i class="text-danger hover"
                                    data-lucide="trash2"></i></div>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>


</div>
