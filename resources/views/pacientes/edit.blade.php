@extends('templates.admin.admin_template')
@section('page_header')
  <h1>
  Processos - 
    <small>Editar</small>
  </h1>
@endsection
@section('content')

  <!-- Your Page Content Here -->
  <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
    {{ Form::model($processo,['url'=>action('ProcessosController@update', $processo->id), 'method'=>'PUT']) }}
      @include('processo.form', ['obras'=>$obras])
    {{ Form::close() }}
    </div>
  </div>
@endsection