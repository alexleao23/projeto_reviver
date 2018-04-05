@extends('partials.template')
@section('title', 'Editar Paciente | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Pacientes -
        <small style="color: white;"><strong>Editar</strong></small>
    </h1>
@endsection
@section('content')

  <!-- Your Page Content Here -->
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($paciente, ['action'=>['PacientesController@update', $paciente->id], 'method'=>'PUT']) }}
      @include('pacientes.form', ['responsaveis' => $responsaveis])
    {{ Form::close() }}
    </div>
  </div>
@endsection