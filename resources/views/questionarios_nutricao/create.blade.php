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
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($questionarioNutricao, ['url'=>action('QuestionariosNutricaoController@store')]) }}
      @include('questionarios_nutricao.form', ['paciente' => $pacientes])
    {{ Form::close() }}
    </div>
  </div>
@endsection