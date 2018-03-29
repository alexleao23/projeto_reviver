@extends('partials.template')
@section('title', 'Usuários | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Usuários -
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
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->name  }}</td>
                                <td width="430px">

                                    {{-- <a href="{{ action('PacientesController@show', $paciente->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> Detalhes </a> --}}

                                    {{-- <a href="{{ action('PacientesController@edit',$paciente->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar </a> --}}
                                    @can('before', App\User::class)
                                        @if ($user->id != Auth::user()->id)
                                            {{ Form::open(['action'=>['UsersController@destroy', $user->id], 'method'=>'DELETE']) }}
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Remover</button>
                                            {{ Form::close() }}
                                        @endif                   
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection