@extends('layouts.authlayout')
@section('title', 'Enviar E-mail | Projeto Reviver')
@section('content')
<div id="particles-js"></div>
    <body class="hold-transition login-page" style="background: url('{{ URL::asset('backgroundsson.jpg') }}') no-repeat center center fixed;
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
          <img src="{{ asset('logo.png') }}" style="z-index: 999999" alt="">
              <br><br>
              @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
              @endif
            {{ Form::open(['route'=>'password.email']) }}
              <div class="form-group has-feedback">
                <input name="email" type="email" class="form-control" placeholder="E-mail" {{ $errors->has('email') ? ' is-invalid' : '' }} value="{{ old('email') }}" required focus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
              </div>
              <div class="row" style="padding-bottom: 2%">
                <div class="col-xs-8">
                  <button class="btn btn-primary">Enviar Link de Redefinição de Senha</button>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="col-xs-4">
                    <a class="btn btn-default" href="{{ route('login') }}" >Voltar</a>
                </div>
              </div>
            {{ Form::close() }}
          </div>
          <!-- /.login-box-body -->
        </div>
        <!-- /.login-box -->
        
@endsection
