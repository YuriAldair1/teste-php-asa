@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-between">
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Médicos', 'url' => route('medicos.home')],
            ['name' => 'Especialidades', 'url' => route('especialidades.home')],
            ['name' => 'Editar Especialidades'],
        ]" separator=">" />

    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @livewire('especialidades.edit', ['especialidade' => $especialidade])
@stop
