@extends('partials.template')
@section('title', 'Cadastrar Usuário | Projeto Reviver')
@section('content-header')
  <h1 style="color: white;">
  Usuário - 
    <small style="color: lightgrey;">Cadastrar</small>
  </h1>
@endsection
@section('content')
    <div class="box box-primary" style="z-index: 99">
  <!-- /.box-header -->
  <!-- form start -->
  <div class='box-body'>
        <h3>Informações para cadastro</h3>
        {{ Form::open(['route'=>'register']) }}
        <div class="form-group has-feedback">
          {{ Form::label('name', 'Nome Completo') }}
          <input name="name" type="text" class="form-control" placeholder="Nome Completo" {{ $errors->has('name') ? ' is-invalid' : '' }} value="{{ old('name') }}" required autofocus>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('name'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('name') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group has-feedback">
          {{ Form::label('email', 'E-mail') }}
          <input name="email" type="email" class="form-control" placeholder="E-mail" {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          @if ($errors->has('email'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group has-feedback">
          {{ Form::label('cpf', 'CPF') }}
          <input name="cpf" class="form-control cpf" placeholder="CPF" {{ $errors->has('cpf') ? ' is-invalid' : '' }}" value="{{ old('cpf') }}" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
          @if ($errors->has('cpf'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('cpf') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group has-feedback">
          {{ Form::label('celular', 'Celular') }}
          <input name="celular" type="celular" class="form-control telefone" placeholder="Celular(Ex: 99999-9999)" {{ $errors->has('celular') ? ' is-invalid' : '' }}" value="{{ old('celular') }}" required>
          <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
          @if ($errors->has('celular'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('celular') }}</strong>
              </span>
          @endif
        </div>
        @if (Auth::user()->lvpermissao == 'Administrador')
          <div class="form-group has-feedback">
            {{ Form::label('perfil', 'Perfil') }}
            {{ Form::select('perfil', ['Nutrição'=>'Nutrição', 'Fisioterapia'=>'Fisioterapia', 'Enfermagem'=>'Enfermagem', 'Medicina'=>'Medicina', 'Ed. Física'=>'Ed. Física', 'Farmácia'=>'Farmácia', 'Administrador'=>'Administrador'], null, ['placeholder'=>'Perfil do usuário', 'class'=>'form-control', 'required']) }}
          </div>
          <div class="form-group has-feedback">
            {{ Form::label('lvpermissao', 'Nível de Permissão') }}
            {{ Form::select('lvpermissao', ['Administrador'=>'Administrador', 'Coordenador'=>'Coordenador', 'Aluno'=>'Aluno'], null, ['placeholder'=>'Nível de permissão do usuário', 'class'=>'form-control', 'required']) }}
          </div>
        @elseif(Auth::user()->lvpermissao == 'Coordenador')
          <div class="form-group has-feedback" type="hidden">
            <input type="hidden" name="perfil" value="{{ Auth::user()->perfil }}">
          </div>
          <div class="form-group has-feedback">
            <input type="hidden" name="lvpermissao" value="Aluno">
          </div>
        @endif
        <div class="form-group has-feedback">
          {{ Form::label('password', 'Senha') }}
          <input name="password" type="password" class="form-control" placeholder="Senha" {{ $errors->has('password') ? ' is-invalid' : '' }}">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          @if ($errors->has('password'))
              <span class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </span>
          @endif
        </div>
        <div class="form-group has-feedback">
          {{ Form::label('password_confirmation', 'Confirmação de Senha') }}
          <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmação da Senha">
          <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-6">
            <a href="{{ URL::previous() }}" class="pull-right btn btn-default btn-block btn-flat">Voltar</a>
          </div> 
          <div class="col-xs-6">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
          </div>
          <!-- /.col -->
        </div>
      {{ Form::close() }}
    </div>
  </div>
  <!-- /.register-box -->
@endsection
