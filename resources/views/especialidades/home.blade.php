@extends('layouts.app')

@section('header-menu')
    <x-nav-link :links="[
        ['route' => 'medicos.home', 'label' => 'Médicos'],
        ['route' => 'medicos.especialidades.home', 'label' => 'Especialidades'],
        ['route' => 'medicos.especialidades.novo', 'label' => 'Registrar Especialidades'],
    ]" />
@endsection

@section('content')

    <div class="d-flex justify-content-between">
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Médicos', 'url' => route('medicos.home')],
            ['name' => 'Especialidades'],
        ]" separator=">" />
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @livewire('especialidades.home')
@stop
