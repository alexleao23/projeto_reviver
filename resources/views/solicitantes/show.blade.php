@extends('partials.template')
@section('title', 'Solicitante '.$solicitante->short_nome.'| Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        {{ $solicitante->short_nome }} (solicitante) -
        <small style="color: white;"><strong>Detalhes</strong></small>
    </h1>
@endsection
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <!-- Your Page Content Here -->
        <div class="box box-primary" style="z-index: 99;">
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <tr><th>Nome: </th><td>{{ $solicitante->nome }}</td></tr>
                    <tr><th>E-mail:</th><td>{{ $solicitante->email }}</td></tr>
                    <tr><th>Celular:</th><td>{{ $solicitante->celular }}</td></tr>
                    <tr><th>Doença:</th><td>{{ $solicitante->doenca }}</td></tr>
                    <tr><th>Status:</th><td>{{ $solicitante->status }}</td></tr>
                </table>
                <br>
                <div class="btn-group pull-right">
                    <a href="/admin" class="btn btn-default "><i class="fa fa-arrow-left"></i> Voltar</a>
                    @can('aceitar', App\User::class)
                        @if ($solicitante->status == 'Em Espera')    
                            <form action="{{ action('SolicitantesController@update',$solicitante->id) }}" method="POST" style="display: inline">
                                {{ method_field('PUT') }}
                                {{ csrf_field() }}
                                <button href="" class="btn btn-success"><i class="fa fa-check"></i> Aceitar</button>
                            </form>
                        @endif
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection