@extends('layouts.app')

@section('header-menu')
    <x-nav-link :links="[
        ['route' => 'pacientes.novo', 'label' => 'Cadastrar Paciente'],
        ['route' => 'pacientes.home', 'label' => 'Pacientes']
        ]" />
@endsection

@section('content')

    <div>
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Pacientes', 'url' => route('pacientes.home')],
            ['name' => 'Cadastrar Pacientes'],
        ]" separator=">" />
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @livewire('pacientes.create')

@stop
