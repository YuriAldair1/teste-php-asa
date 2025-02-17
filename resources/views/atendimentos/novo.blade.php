@extends('layouts.app')

@section('header-menu')
    <x-nav-link :links="[
        ['route' => 'atendimentos.home', 'label' => 'Atendimentos'],
        ['route' => 'atendimentos.novo', 'label' => 'Registar Atendimentos']
        ]" />
@endsection

@section('content')

    <div class="d-flex justify-content-between">
        <x-breadcrumb :items="[
            ['name' => 'início', 'url' => route('home')],
            ['name' => 'Atendimentos', 'url' => route('atendimentos.home')],
            ['name' => 'Registrar Atendimento'],
        ]" separator=">" />
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @livewire('atendimentos.create')
    @livewire('atendimentos.home')
@stop
