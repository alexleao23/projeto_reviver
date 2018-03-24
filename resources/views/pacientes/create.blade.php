@extends('partials.template')
@section('title', 'Cadastrar Paciente | Projeto Reviver')
@section('content-header')
  <h1 style="color: white;">
  Paciente - 
    <small style="color: lightgrey;">Cadastrar</small>
  </h1>
@endsection
@section('content')
  <!-- Your Page Content Here -->
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($paciente,['url'=>action('PacientesController@store')]) }}
      @include('pacientes.form', ['responsavel' => $responsaveis])
    {{ Form::close() }}
    </div>
  </div>
@endsection