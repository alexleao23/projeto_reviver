@extends('partials.template')
@section('title', 'Pacientes | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Pacientes -
        <small>Lista</small>
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
                            
                            <th>
                                Ações
                            </th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pacientes as $paciente)
                            <tr>
                                <td>{{ $paciente->nome  }}</td>
                                <td width="430px">

                                    <a href="{{ action('PacientesController@show', $paciente->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> Detalhes </a>

                                    <a href="{{ action('PacientesController@edit',$paciente->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar </a>
                                    @can('delete', App\User::class)
                                        <form action="{{ action('PacientesController@destroy',$paciente->id) }}" method="POST" style="display: inline">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button href="" class="btn btn-danger"><i class="fa fa-trash"></i> Remover</button>
                                        </form>
                                    @endcan
                                    @can('create', App\User::class)
                                        <a href="{{ action('PacientesController@questionarioNutricaoCreate', $paciente->id) }}" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                    @endcan

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div style="text-align: center;">
                {{ $pacientes->links() }}
            </div>
        </div>
    </div>
@endsection