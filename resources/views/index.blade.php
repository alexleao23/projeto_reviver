@extends('partials.template')
@section('title', 'Projeto Reviver | Início')
{{-- <div class="content-wrapper"> --}}
  <!-- Content Header (Page header) -->
  @section('content-header')
    <h1 style="color: white; 
">
      Página inicial
      <small style="color: lightgrey;">Bem-vindo, {{ Auth::user()->short_name }}</small>
    </h1>
{{--     <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Examples</a></li>
      <li class="active">Blank page</li>
    </ol> --}}
  @endsection
  <!-- Main content -->
  <!-- Default box -->
  @section('content')
  <div class="box primary" style="z-index: 999">
    <div class="box-header with-border">
      <h3 class="box-title">Ações</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Esconder">
          <i class="fa fa-minus"></i></button>
        {{-- <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button> --}}
      </div>
    </div>
    <div class="box-body">
      <div class="row">
        @can('create', App\User::class)
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>150</h3>
                <p><strong>Usuários cadastrados</strong></p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="{{ url('/admin/register') }}" class="small-box-footer">
                <b>Cadastrar Usuário</b> <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
        @endcan
        <!-- ./col -->
        @if (Auth::user()->lvpermissao == "Aluno")
          <div class="col-lg-12 col-xs-12">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>65</h3>
                <p><b>Responsáveis cadastrados</b></p>
              </div>
              <div class="icon">
                <i class="fa fa-handshake-o"></i>
              </div>
              <a href="{{ url('/admin/responsaveis/create') }}" class="small-box-footer">
                <b>Cadastrar responsável</b> <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
        @else
          <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-red">
              <div class="inner">
                <h3>65</h3>
                <p><b>Responsáveis cadastrados</b></p>
              </div>
              <div class="icon">
                <i class="fa fa-handshake-o"></i>
              </div>
              <a href="{{ url('/admin/responsaveis/create') }}" class="small-box-footer">
                <b>Cadastrar responsável</b> <i class="fa fa-plus"></i>
              </a>
            </div>
          </div>
        @endif
      </div>
      <div class="row">
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53</h3>
              <p><strong>Pacientes cadastrados</strong></p>
            </div>
            <div class="icon">
              <i class="fa fa-id-card-o"></i>
            </div>
            <a href="{{ action('PacientesController@create') }}" class="small-box-footer">
              <strong>Cadastrar Paciente</strong> <i class="fa fa-plus"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><i class="fa fa-info-circle"></i></h3>
              <p><b>Sobre o sistema</b></p>
            </div>
            <div class="icon">
              <i class="fa fa-info"></i>
            </div>
            <a href="#" class="small-box-footer">
              <b>Saiba mais</b> <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- ./col -->
    </div>
    <div class="box-footer">
      {{-- Footer da box, n sei pra q ainda mas ta... --}}
    </div>
  </div>
{{-- </div> --}}
@endsection