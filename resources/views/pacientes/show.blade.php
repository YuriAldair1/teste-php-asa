@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-between">
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Pacientes', 'url' => route('pacientes.home')],
            ['name' => 'Atualizar Paciente'],
        ]" separator=">" />
        
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="d-flex justify-content-between">


    </div>
    @livewire('pacientes.edit', ['paciente' => $paciente])
@stop
