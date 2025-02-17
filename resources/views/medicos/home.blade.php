@extends('layouts.app')


@section('header-menu')
    <x-nav-link :links="[
        ['route' => 'medicos.home', 'label' => 'Médicos'],
        ['route' => 'medicos.novo', 'label' => 'Cadastrar Médico'],
        ['route' => 'medicos.especialidades.home', 'label' => 'Especialidades'],
    ]" />
@endsection

@section('content')

    <div>
        <x-breadcrumb :items="[['name' => 'início', 'url' => route('home')], ['name' => 'Médicos']]" separator=">" />
    </div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @livewire('medico.home')

@stop
