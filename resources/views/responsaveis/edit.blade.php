@extends('partials.template')
@section('title', 'Editar Responsável | Projeto Reviver')
@section('content-header')
    <h1 style="color: white;">
        Responsáveis -
        <small style="color: white;"><strong>Editar</strong></small>
    </h1>
@endsection
@section('content')
  <!-- Your Page Content Here -->
    <div class="box box-success">
        <div class='box-body'>
            {{ Form::model($responsavel, ['action'=>['ResponsaveisController@update', $responsavel->id], 'method'=>'PUT']) }}
                @include('responsaveis.form')
            {{ Form::close() }}
        </div>
    </div>
@endsection