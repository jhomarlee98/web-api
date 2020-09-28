@extends('layouts.app')
@section('title')
    curso
@endsection
@section('content')
    @include('widgets.header')
    @include('widgets.curses')
    <hr>
    @include('widgets.enlaces')
    @include('widgets.servicios')

    <!--@include('widgets.contactInicio')-->

    @include('widgets.footer')
@endsection
@section('modales')
    @include('widgets.modalCursoHorario')
@endsection
