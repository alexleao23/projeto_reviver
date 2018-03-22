@extends('partials.template')
@section('title', 'Cadastrar Paciente | Projeto Reviver')
@section('content-header')
  <h1>
  Pacientes - 
    <small>Cadastrar</small>
  </h1>
@endsection
@section('content')
  <!-- Your Page Content Here -->
  <div class="box box-primary">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($paciente ,['url'=>action('PacientesController@store')]) }}
      @include('pacientes.form')
    {{ Form::close() }}
    </div>
  </div>
@endsection