@extends('layouts.authlayout')
@section('title', 'Projeto Reviver | Login')
@section('content')
<div id="particles-js"></div>
    <body class="hold-transition login-page" style="background: url('backgroundsson.jpg') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
   
        <div class="login-box">
          {{-- <div style="color:white;text-shadow: 2px 2px 5px white;" class="login-logo">
            <span class="fa-stack fa-lg">
              <i class="fa fa-square-o fa-stack-2x"></i>
              <i class="fa fa-hospital-o fa-stack-1x"></i>
            </span>
            <b> Projeto Reviver</b>
          </div> --}}
          <!-- /.login-logo -->
            <div class="login-box-body">
          <img src="logo.png" style="z-index: 999999" alt="">
              <br><br>
              @if ($errors->has('msg'))
                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h4><i class="icon fa fa-warning"></i> Alerta!</h4>
                  {{ $errors->first('msg') }}
                </div>
              @endif
            {{ Form::open(['route'=>'login']) }}
              <div class="form-group has-feedback">
                <input name="cpf" class="form-control" placeholder="CPF" autocomplete="off" {{ $errors->has('cpf') ? ' is-invalid' : '' }} value="{{ old('cpf') }}" required focus>
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

            <a href="{{ route('password.request') }}" style="color: navy;">Esqueceu sua senha?</a><br>
          </div>
          <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        
@endsection
