@extends('layouts.app')

@section('header-menu')
    <x-nav-link :links="[
        ['route' => 'pacientes.home', 'label' => 'Pacientes'],
        ['route' => 'pacientes.novo', 'label' => 'Cadastrar Paciente'],
    ]" />
@endsection

@section('content')
    <div>
        <x-breadcrumb :items="[['name' => 'início', 'url' => route('home')], ['name' => 'Pacientes']]" separator=">" />
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    @livewire('pacientes.home')

@stop
