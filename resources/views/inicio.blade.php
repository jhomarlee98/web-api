@extends('layouts.app')
@section('title')
inicio
@endsection
@section('content')
	@include('widgets.header')
	@include('widgets.slider')
	@include('widgets.enlaces')
    @include('widgets.specialities')
	<hr>
	@include('widgets.servicios')

	<!--@include('widgets.contactInicio')-->

	@include('widgets.footer')
@endsection
@section('modales')
	@include('widgets.modalCursoHorario')
@endsection
