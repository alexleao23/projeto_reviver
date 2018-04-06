@extends('partials.template')
@section('title', 'Cadastrar Responsável | Projeto Reviver')
@section('content-header')
  <h1 style="color: white;">
  Responsável - 
    <small style="color: white;"><strong>Cadastrar</strong></small>
  </h1>
@endsection
@section('content')
    <!-- Your Page Content Here -->
    <div class="box box-success">
        <div class='box-body'>
            {{ Form::model($responsavel ,['action'=>'ResponsaveisController@store']) }}
                @include('responsaveis.form')
            {{ Form::close() }}
        </div>
    </div>
@endsection