@extends('partials.template')
@section('title', 'Cadastrar Paciente | Projeto Reviver')
@section('content-header')
  <h1 style="color: white;">
  Questionário - 
    <small style="color: lightgrey;">Nutrição</small>
  </h1>
@endsection
@section('content')
  <!-- Your Page Content Here -->
  <div class="box box-success" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($paciente, ['action'=>'PacientesController@questionarioNutricaoStore']) }}
      @include('questionarios_nutricao.form')
    {{ Form::close() }}
    </div>
  </div>
@endsection