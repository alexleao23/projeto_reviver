@extends('partials.template')
@section('title', 'Pacientes | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        Pacientes -
        <small style="color: white;"><strong>Lista</strong></small>
    </h1>
@endsection
@section('content')
<div class="col-md-10 col-md-offset-1">
    <!-- Your Page Content Here -->
    <div class="box box-primary" style="z-index: 99;">
        <div class="box-body table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pacientes as $paciente)
                        <tr>
                            <td>{{ $paciente->nome  }}</td>
                            <td width="450px">
                                <a href="{{ action('PacientesController@show', $paciente->id) }}" class="btn btn-default"><i class="fa fa-eye"></i> Detalhes </a>
                                <a href="{{ action('PacientesController@edit',$paciente->id) }}" class="btn btn-primary"><i class="fa fa-edit"></i> Editar </a>
                                @can('delete', App\User::class)
                                    <form action="{{ action('PacientesController@destroy',$paciente->id) }}" method="POST" style="display: inline">
                                        {{ method_field('DELETE') }}
                                        {{ csrf_field() }}
                                        <button href="" class="btn btn-danger"><i class="fa fa-trash"></i> Remover</button>
                                    </form>
                                @endcan
                                @switch(Auth::user()->perfil)
                                    @case('Nutrição')
                                        @can('create', App\User::class)
                                            <a href="{{ route('questionarios_nutricao', $paciente->id) }}" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                        @endcan
                                        @break
                                    @case('Fisioterapia')
                                        @can('create', App\User::class)
                                            <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                        @endcan
                                        @break
                                    @case('Ed. Física')
                                        @can('create', App\User::class)
                                            <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                        @endcan
                                        @break
                                    @case('Enfermagem')
                                        @can('create', App\User::class)
                                            <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                        @endcan
                                        @break
                                    @case('Medicina')
                                        @can('create', App\User::class)
                                            <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                        @endcan
                                        @break
                                    @case('Farmácia')
                                        @can('create', App\User::class)
                                            <a href="#" class="btn btn-default"><i class="fa fa-file-text-o"></i> Questionário </a>
                                        @endcan
                                        @break
                                    @default
                                        @can('before', App\User::class)
                                            <div class="btn-group" style="position: absolute; margin-left: 3px;">
                                                <button type="button" class="btn btn-default">Questionários</button>
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="{{ route('questionarios_nutricao', $paciente->id) }}">Nutrição</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Fisioterapia</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Ed. Física</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Enfermagem</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Medicina</a></li>
                                                    <li class="divider"></li>
                                                    <li><a href="#">Farmácia</a></li>
                                                </ul>
                                            </div>
                                        @endcan
                                @endswitch
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