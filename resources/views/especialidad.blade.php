@extends('layouts.app')
@section('title')
    @if(!empty($specialities))
        @foreach($specialities as $speciality)
            {{$speciality->nick}}
        @endforeach
    @endif |
@endsection
@section('content')
    @include('widgets.header')
    @include('widgets.speciality_slide')
    @include('widgets.enlaces')
    <hr>

    @include('widgets.especialidad_curso')
    @include('widgets.footer')
@endsection
@section('modales')
    @include('widgets.modalCursoHorario')
@endsection
