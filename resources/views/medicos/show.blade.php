@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between">
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Médicos', 'url' => route('medicos.home')],
            ['name' => 'Editar Especialidades'],
        ]" separator=">" />
        
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between">

    </div>
    @livewire('medico.edit', ['medico' => $medico])
@stop
