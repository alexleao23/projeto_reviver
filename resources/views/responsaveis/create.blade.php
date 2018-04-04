@extends('partials.template')
@section('title', 'Cadastrar Responsável | Projeto Reviver')
@section('content-header')
  <h1 style="text-align: center; color: white;">
  Responsável - 
    <small style="color: white;"><strong>Cadastrar</strong></small>
  </h1>
@endsection
@section('content')
  <!-- Your Page Content Here -->
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($responsavel ,['url'=>action('ResponsaveisController@store')]) }}
      @include('responsaveis.form')
    {{ Form::close() }}
    </div>
  </div>
@endsection