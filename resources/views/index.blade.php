@extends('partials.template')
@section('title', 'Projeto Reviver | Início')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    @section('content-header')
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    @endsection

    <!-- Main content -->
    @section('content')

      <!-- Default box -->
      <div class="box primary">
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
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>150</h3>

              <p><b>Usuários cadastrados</b></p>
            </div>
            <div class="icon">
              <i class="fa fa-user-plus"></i>
            </div>
            <a href="{{ url('/admin/register') }}" class="small-box-footer">
              <b>Cadastrar usuário</b> <i class="fa fa-plus"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Bounce Rate</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>User Registrations</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Unique Visitors</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">
              More info <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        </div>
        <!-- ./col -->
      </div>
        <div class="box-footer">
          Footer da box, n sei pra q ainda mas ta...
        </div>
        </div>
        <!-- /.box-body -->
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    @endsection
    <!-- /.content -->
</div>
@endsection