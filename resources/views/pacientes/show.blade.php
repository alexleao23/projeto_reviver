@extends('partials.template')
@section('title', 'Paciente '.$paciente->short_nome.' | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        {{ $paciente->short_nome }} (paciente) -
        <small style="color: white;"><strong>Detalhes</strong></small>
    </h1>
@endsection
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <!-- Your Page Content Here -->
        <div class="box box-primary" style="z-index: 99;">
            <div class="box-header">
                <div class="btn-group pull-right">
                    <a href="{{ action('PacientesController@edit',$paciente->id)  }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar </a>
                    <a href="{{ action('PacientesController@index')  }}" class="btn btn-default "><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table">
                <table class="table table-bordered table-striped table-hover">
                    <tr><th>Nome: </th><td>{{ mb_strtoupper($paciente->nome) }}</td></tr>
                    <tr><th>CPF:</th><td>{{ $paciente->cpf }}</td></tr>
                    <tr><th>Data de Nascimento:</th><td>{{ $paciente->data_nasc_formatada }}</td></tr>
                    <tr><th>Idade:</th><td>{{ $paciente->idade }}</td></tr>
                    <tr><th>Sexo:</th><td>{{ mb_strtoupper($paciente->sexo) }}</td></tr>
                    <tr><th>Celular:</th><td>{{ $paciente->celular }}</td></tr>
                    <tr><th>Endereço:</th><td>{{ mb_strtoupper($paciente->endereco) }}
                        , {{ mb_strtoupper($paciente->bairro) }}
                    @if(isset($paciente->complemento))
                        , {{ mb_strtoupper($paciente->complemento) }}
                    @endif
                    </td></tr>
                </table>
                <br>
                <div class="btn-group pull-right">
                    <a href="{{ action('PacientesController@index')  }}" class="btn btn-default "><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection