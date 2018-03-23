@extends('partials.template')
@section('title', 'Cadastrar Paciente | Projeto Reviver')
@section('content-header')
  <h1 style="color: white;">
  Responsável - 
    <small style="color: lightgrey;">Cadastrar</small>
  </h1>
@endsection
@section('content')
  <!-- Your Page Content Here -->
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($responsavel ,['url'=>action('PacientesController@store')]) }}
      @include('pacientes.form')
    {{ Form::close() }}
    </div>
  </div>
@endsection