@extends('layouts.app')

@section('title', 'Asa')
@section('content')


<div style="min-height: 100%">
    <div class="content">
        <div class="mx-auto text-uppercase py-5 d-grid gap-5">
            <div class="">
                <div class="relative mb-4 ">
                    <img src="{{ url('images/asasaude-blue.png') }}" class="" alt="logo" style="width:50vw;height:auto">
                </div>
                <p className="text-dark lead ">Gestor Hospitalar</p>
            </div>


            <div class="">
                <h3>Programador</h3>
                <a href="">Yuri Aldair</a>
            </div>
        </div>
    </div>
</div>
@stop
@push('js')
@endpush
