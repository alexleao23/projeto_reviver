@extends('partials.template')
@section('title', 'Usuário '.$user->short_name.' | Projeto Reviver')
@section('content-header')
    <h1 style="text-align: center; color: white;">
        {{ $user->short_name }} (usuário) -
        <small style="color: white;"><strong>Detalhes</strong></small>
    </h1>
@endsection
@section('content')
    <div class="col-md-10 col-md-offset-1">
        <!-- Your Page Content Here -->
        <div class="box box-primary" style="z-index: 99;">
            <div class="box-body table">
                <h3>Dados Pessoais</h3>
                <table class="table table-bordered table-striped table-hover">
                    <tr><th>Nome: </th><td>{{ mb_strtoupper($user->name) }}</td></tr>
                    <tr><th>E-mail: </th><td>{{ $user->email }}</td></tr>
                    <tr><th>CPF:</th><td>{{ $user->cpf }}</td></tr>
                    <tr><th>Celular:</th><td>{{ $user->celular }}</td></tr>
                    <tr><th>Perfil:</th><td>{{ mb_strtoupper($user->perfil) }}</td></tr>
                </table>
                <br>
                <div class="btn-group pull-right">
                    <a href="{{ action('UsersController@index')  }}" class="btn btn-default "><i class="fa fa-arrow-left"></i> Voltar</a>
                </div>
            </div>
        </div>
    </div>
@endsection