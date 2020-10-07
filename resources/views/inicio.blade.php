@extends('layouts.app')
@section('title')
@endsection
@section('content')
	@include('widgets.header')
	@include('widgets.slider')
	@include('widgets.enlaces')
    @include('widgets.especialidades_inicio')
	<hr>
	@include('widgets.servicios')

	<!--@include('widgets.contactInicio')-->

	@include('widgets.footer')
@endsection
@section('modales')
	@include('widgets.modalCursoHorario')
@endsection
