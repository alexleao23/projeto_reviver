@extends('layouts.authlayout')
@section('title', 'Projeto Reviver | Cadastro')
@section('content')
    <body class="hold-transition register-page">
        <div class="register-box">
          <div class="register-logo">
            <b>Projeto Reviver</b>
          </div>

          <div class="register-box-body">
            <h3 class="login-box-msg">Cadastrar novo usuário</h3>
            {{ Form::open(['route'=>'register']) }}
              <div class="form-group has-feedback">
                <input name="name" type="text" class="form-control" placeholder="Nome Completo" {{ $errors->has('name') ? ' is-invalid' : '' }} value="{{ old('name') }}" required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="E-mail" {{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                <input name="cpf" class="form-control" placeholder="CPF" {{ $errors->has('cpf') ? ' is-invalid' : '' }}" value="{{ old('cpf') }}" required>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('cpf'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                <input name="celular" type="celular" class="form-control" placeholder="Celular" {{ $errors->has('celular') ? ' is-invalid' : '' }}" value="{{ old('celular') }}" required>
                <span class="glyphicon glyphicon-earphone form-control-feedback"></span>
                @if ($errors->has('celular'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('celular') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                {{ Form::select('perfil', ['Nutrição'=>'Nutrição', 'Fisioterapia'=>'Fisioterapia', 'Enfermagem'=>'Enfermagem', 'Medicina'=>'Medicina', 'Ed. Física'=>'Ed. Física', 'Farmácia'=>'Farmácia'], null, ['placeholder'=>'Selecione o perfil do usuário', 'class'=>'form-control', 'required']) }}
              </div>
              <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Senha" {{ $errors->has('password') ? ' is-invalid' : '' }}">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                <input name="password_confirmation" type="password" class="form-control" placeholder="Confirmação da Senha">
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
              </div>
              <div class="row">
                <div class="col-xs-4">
                  <button type="submit" class="btn btn-primary btn-block btn-flat">Cadastrar</button>
                </div>
                <!-- /.col -->
              </div>
            {{ Form::close() }}
            <br>
            <a href="{{ route('login') }}" class="text-center">Já possuo uma conta</a>
          </div>
          <!-- /.form-box -->
        </div>
        <!-- /.register-box -->
@endsection