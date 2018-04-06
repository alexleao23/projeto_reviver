@extends('partials.template')
@section('title', 'Cadastrar Paciente | Projeto Reviver')
@section('content-header')
  <h1 style="text-align: center; color: white;">
  Paciente - 
    <small style="color: white;"><strong>Cadastrar</strong></small>
  </h1>
@endsection
@section('content')
  	<!-- Your Page Content Here -->
	<div class="box box-success">
	    <div class='box-body'>
			{{ Form::model($paciente, ['action'=>'PacientesController@store']) }}
				@include('pacientes.form', ['responsaveis' => $responsaveis])
			{{ Form::close() }}
		</div>
	</div>
@endsection