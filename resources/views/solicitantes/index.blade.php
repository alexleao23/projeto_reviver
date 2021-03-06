@extends('partials.template')
@section('title', 'Solicitantes | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Solicitantes -
        <small style="color: white;"><strong>Lista</strong></small>
    </h1>
@endsection
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <!-- Your Page Content Here -->
        <div class="box box-primary" style="z-index: 99;">
            {{-- <div class="box-header">
            asdf
            </div> --}}
            <!-- /.box-header -->
            <!-- form start -->
            <div class="box-body table-responsive">
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- {{ dd($responsavels) }} --}}
                        @foreach($solicitantes as $solicitante)
                            <tr>
                                <td>{{ $solicitante->nome  }}</td>
                                <td>{{ $solicitante->status  }}</td>
                                <td width="410px">
                                    <a href="{{ action('SolicitantesController@show', $solicitante->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> Detalhes </a>
                                    @can('aceitar', App\User::class)
                                        @if ($solicitante->status == 'Em Espera')    
                                            <form action="{{ action('SolicitantesController@update',$solicitante->id) }}" method="POST" style="display: inline">
                                                {{ method_field('PUT') }}
                                                {{ csrf_field() }}
                                                <button href="" class="btn btn-success"><i class="fa fa-check"></i> Aceitar</button>
                                            </form>
                                        @endif
                                    @endcan
                                    @can('delete', App\User::class)
                                        <form action="{{ action('SolicitantesController@destroy',$solicitante->id) }}" method="POST" style="display: inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button href="" class="btn btn-danger"><i class="fa fa-trash"></i> Remover</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div style="text-align: center;">
                {{ $solicitantes->links() }}
            </div>
        </div>
    </div>
@endsection