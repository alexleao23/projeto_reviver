@extends('partials.template')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Responsável -
        <small>Detalhes</small>
    </h1>
@endsection
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <!-- Your Page Content Here -->
        <div class="box box-primary" style="z-index: 99;">
            <div class="box-header">

                <div class="btn-group pull-right">
                    <a href="{{ action('ResponsaveisController@edit',$responsavel->id)  }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar </a>
                    <a href="{{ action('ResponsaveisController@index')  }}" class="btn btn-default "><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <tr><th>Nome: </th><td>{{ mb_strtoupper($responsavel->nome) }}</td></tr>
                    {{-- <tr><th>CPF:</th><td>{{ $responsavel->cpf }}</td></tr> --}}
                    <tr><th>Data de Nascimento:</th><td>{{ $responsavel->data_nasc_formatada }}</td></tr>
                    <tr><th>Sexo:</th><td>{{ mb_strtoupper($responsavel->sexo) }}</td></tr>
                    <tr><th>Celular:</th><td>{{ $responsavel->celular }}</td></tr>
                    <tr><th>Endereço:</th><td>{{ mb_strtoupper($responsavel->endereco) }}
                    @if(isset($responsavel->complemento))
                    , COMPLEMENTO: {{ mb_strtoupper($responsavel->complemento) }}
                    @endif

                        , {{ mb_strtoupper($responsavel->bairro) }}
                    </td></tr>

                </table>
                <br>
                <div class="btn-group pull-right">
                    <a href="{{ action('ResponsaveisController@index')  }}" class="btn btn-default "><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection