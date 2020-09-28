@extends('layouts.app')
@section('title')
    especialidades
@endsection
@section('content')
    @include('widgets.header')
    @include('widgets.speciality_slide')
    @include('widgets.enlaces')
    <hr>
    @include('widgets.servicios')

    <!--@include('widgets.contactInicio')-->

    @include('widgets.footer')
@endsection
@section('modales')
    @include('widgets.modalCursoHorario')
@endsection
