@extends('layouts.app')
@section('title')
    especialidades |
@endsection
@section('content')
    @include('widgets.header')
    @include('widgets.speciality_slide')
    @include('widgets.enlaces')
    @include('widgets.especialidades')
    <hr>
    @include('widgets.servicios')


    @include('widgets.footer')
@endsection
@section('modales')
    @include('widgets.modalCursoHorario')
@endsection
