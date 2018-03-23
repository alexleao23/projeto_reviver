@extends('partials.template')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Responsáveis -
        <small>Editar</small>
    </h1>
@endsection
@section('content')

  <!-- Your Page Content Here -->
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($responsavel, ['url'=>action('ResponsaveisController@update', $responsavel->id), 'method'=>'PUT']) }}
      @include('responsaveis.form')
    {{ Form::close() }}
    </div>
  </div>
@endsection