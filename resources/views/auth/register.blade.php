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

        @include('form_build.text', [
          'nome'=>'name',
          'label'=>'Nome Completo',
          'placeholder'=>'Ex.: João Pereira da Silva',
          'classicon'=>'glyphicon glyphicon-user',
          'classdiv'=>'col-md-6'
        ])

        @include('form_build.text', [
          'nome'=>'cpf',
          'label'=>'CPF',
          'class'=>'form-control cpf',
          'placeholder'=>'Ex.: 000.000.000-00',
          'classicon'=>'glyphicon glyphicon-user',
          'classdiv'=>'col-md-6'
        ])

        @include('form_build.text', [
          'nome'=>'email',
          'label'=>'E-mail',
          'placeholder'=>'Ex.:seuemail@email.com',
          'classicon'=>'glyphicon glyphicon-envelope',
          'classdiv'=>'col-md-6'
        ])

        @include('form_build.text', [
          'nome'=>'celular',
          'label'=>'Celular',
          'class'=>'form-control telefone',
          'placeholder'=>'Ex: (99) 99999-9999',
          'classicon'=>'glyphicon glyphicon-earphone',
          'classdiv'=>'col-md-6'
        ])
        
        @if (Auth::user()->lvpermissao == 'Administrador')
          @include('form_build.select', [
            'nome'=>'perfil',
            'label'=>'Perfil',
            'opcoes'=>[
              'Nutrição'=>'Nutrição',
              'Fisioterapia'=>'Fisioterapia',
              'Enfermagem'=>'Enfermagem',
              'Medicina'=>'Medicina',
              'Ed. Física'=>'Ed. Física',
              'Farmácia'=>'Farmácia',
              'Administrador'=>'Administrador'
            ],
            'placeholder'=>'Selecione',
            'required'=>'required',
            'class'=>'form-control select2',
            'classdiv'=>'col-md-6'
          ])

          @include('form_build.select', [
            'nome'=>'lvpermissao',
            'label'=>'Nível de Permissão',
            'opcoes'=>[
              'Administrador'=>'Administrador',
              'Coordenador'=>'Coordenador',
              'Aluno'=>'Aluno'
            ],
            'placeholder'=>'Selecione',
            'required'=>'required',
            'class'=>'form-control select2',
            'classdiv'=>'col-md-6'
          ])

        @elseif(Auth::user()->lvpermissao == 'Coordenador')
          <div class="form-group has-feedback" type="hidden">
            <input type="hidden" name="perfil" value="{{ Auth::user()->perfil }}">
          </div>
          <div class="form-group has-feedback">
            <input type="hidden" name="lvpermissao" value="Aluno">
          </div>
        @endif

        @include('form_build.text', [
          'nome'=>'senha',
          'label'=>'Senha',
          'placeholder'=>'Senha',
          'classicon'=>'glyphicon glyphicon-lock',
          'classdiv'=>'col-md-6'
        ])

        @include('form_build.text', [
          'nome'=>'password_confirmation',
          'label'=>'Confirmação de Senha',
          'placeholder'=>'Confirmação de Senha',
          'classicon'=>'glyphicon glyphicon-log-in',
          'classdiv'=>'col-md-6'
        ])

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
