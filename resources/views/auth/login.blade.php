@extends('layouts.authlayout')
@section('title', 'Projeto Reviver | Login')
@section('content')
    <body class="hold-transition login-page">
        <div class="login-box">
          <div class="login-logo">
            <b>Projeto Reviver</b>
          </div>
          <!-- /.login-logo -->
          <div class="login-box-body">
            <h3 class="login-box-msg">Entrar</h3>
            {{ Form::open(['route'=>'login']) }}
              <div class="form-group has-feedback">
                <input name="cpf" class="form-control" placeholder="CPF" {{ $errors->has('cpf') ? ' is-invalid' : '' }} value="{{ old('cpf') }}" required focus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('cpf'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('cpf') }}</strong>
                    </span>
                @endif
              </div>
              <div class="form-group has-feedback">
                <input name="password" type="password" class="form-control" placeholder="Senha" {{ $errors->has('password') ? ' is-invalid' : '' }}>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <div class="row">
                <div class="col-xs-8">
                  <div class="checkbox icheck">
                    <label>
                      <input name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}> Lembrar-se de mim
                    </label>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-4">
                  <button class="btn btn-primary btn-block btn-flat">Entrar</button>
                </div>
                <!-- /.col -->
              </div>
            {{ Form::close() }}

            <a href="{{ route('password.request') }}">Esqueceu sua senha?</a><br>
            <a href="{{ route('register') }}" class="text-center">Cadastrar-se</a>

          </div>
          <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
@endsection
