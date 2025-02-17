@extends('layouts.app')

@section('header-menu')
    <x-nav-link :links="[
        ['route' => 'medicos.novo', 'label' => 'Cadastrar Médico'],
        ['route' => 'medicos.especialidades.novo', 'label' => 'Cadastrar Especialidades'],
        ['route' => 'medicos.especialidades.home', 'label' => 'Especialidades'],
    ]" />
@endsection

@section('content')

    <div class="d-flex justify-content-between">
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Médicos', 'url' => route('medicos.home')],
            ['name' => 'Cadastrar Especialidades'],
        ]" separator=">" />

    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif



    <div class="grid pag-1s">
        @livewire('especialidades.create')
        @livewire('especialidades.home')
    </div>
@stop
