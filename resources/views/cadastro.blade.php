<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Cadastro - Projeto Reviver</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/bootstrap/css/bootstrap.min.css') }}">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{{ asset('font-awesome-4.7.0/css/font-awesome.min.css') }}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/AdminLTE.min.css') }}">
        <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/select2/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/plugins/iCheck/all.css') }}">
    </head>
    <div id="particles-js" style="position: fixed;"></div>
    <body class="skin-blue layout-top-nav skin-green" style="height: auto; min-height: 100%;">
        <style>
            .box-success {
                z-index: 99;
            }
            h3 {
                text-align: center;
            }
            .index {
                text-align: left;
            }
            .divider {
              height: 1px;
              width:100%;
              display:block;
              margin: 9px 0;
              overflow: hidden;
              background-color: #e5e5e5;
            }
        </style>
        <div class="wrapper" style="height: auto; min-height: 100%;">
            <!-- Full Width Column -->
            <div class="content-wrapper" style="min-height: 217px; background: url('{{ URL::asset('backgroundsson.jpg') }}') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="container">
                <!-- Content Header (Page header) -->
                    <section class="content-header">
                        @yield('content-header')
                    </section>
                    <!-- Main content -->
                    <section class="content">
                      <div class="box box-primary" style="z-index: 99;">
                        <div class='box-body'>
                          <h3>Informações para cadastro</h3>
                          {{ Form::open(['route'=>'cadastro']) }}
                            @include('form_build.text', [
                              'nome'=>'nome',
                              'label'=>'Nome Completo',
                              'placeholder'=>'Ex.: João Pereira da Silva',
                              'classicon'=>'glyphicon glyphicon-user',
                              'classdiv'=>'col-md-12'
                            ])
                            @include('form_build.text', [
                              'nome'=>'email',
                              'label'=>'E-mail',
                              'placeholder'=>'Ex.:seuemail@email.com',
                              'classicon'=>'glyphicon glyphicon-envelope',
                              'classdiv'=>'col-md-12'
                            ])
                            @include('form_build.text', [
                              'nome'=>'celular',
                              'label'=>'Celular',
                              'class'=>'form-control telefone',
                              'placeholder'=>'Ex: (99) 99999-9999',
                              'classicon'=>'glyphicon glyphicon-earphone',
                              'classdiv'=>'col-md-12'
                            ])
                            <div class="col-md-12">
                              <div class="form-group">
                                {{ Form::label('doenca', 'Doença') }}<br>
                                {{ Form::radio('doenca', 'Alzheimer', false, ['class'=>'flat-red']) }} Alzheimer&nbsp;&nbsp;
                                {{ Form::radio('doenca', 'Parkinson', true, ['class'=>'flat-red']) }} Parkinson&nbsp;&nbsp;
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                {{ Form::label('sou', 'Sou') }}<br>
                                {{ Form::radio('sou', 'Profissional', false, ['class'=>'flat-red']) }} Profissional&nbsp;&nbsp;
                                {{ Form::radio('sou', 'Acadêmico', true, ['class'=>'flat-red']) }} Acadêmico&nbsp;&nbsp;
                                {{ Form::radio('sou', 'Familiar', true, ['class'=>'flat-red']) }} Familiar&nbsp;&nbsp;
                                {{ Form::radio('sou', 'Cuidador', true, ['class'=>'flat-red']) }} Cuidador&nbsp;&nbsp;
                                {{ Form::radio('sou', 'Paciente', true, ['class'=>'flat-red']) }} Paciente&nbsp;&nbsp;
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                {{ Form::label('projetoreviver', 'Projeto Reviver') }}<br>
                                {{ Form::radio('projetoreviver', 'Já Participo', false, ['class'=>'flat-red']) }} Já participo&nbsp;&nbsp;
                                {{ Form::radio('projetoreviver', 'Tenho interesse', true, ['class'=>'flat-red']) }} Tenho interesse&nbsp;&nbsp;
                              </div>
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
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.container -->
            </div>
            <!-- /.content-wrapper -->
            @include('partials.footer')
        </div>
        <!-- ./wrapper -->
        <!-- jQuery 2.2.3 -->
<script src="{{ asset('bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{ asset('bower_components/AdminLTE/bootstrap/js/bootstrap.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bower_components/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bower_components/AdminLTE/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bower_components/AdminLTE/dist/js/app.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('bower_components/AdminLTE/dist/js/demo.js') }}"></script>
<script src="{{ asset('particlesjs/particles.js') }}"></script>
<script src="{{ asset('jquerymask/src/jquery.mask.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('bower_components/AdminLTE/plugins/iCheck/icheck.min.js') }}"></script>
<script>
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });
</script>
</script>
<script>
$(function () {
  $(".select2").select2();
  particlesJS();
});
</script>
  <script>
    $(document).ready(function () {

    $('.cep').mask('00000-000')
    $('.date').mask('00/00/0000')
    $('.datetime').mask('00/00/0000 00:00')
    $('.cpf').mask('000.000.000-00');
    $('.cns').mask('000 0000 0000 0000');
    $('.rg').mask('000000');
    $('.peso').mask('00.00');
    $('.altura').mask('0.00');

    //Máscara de telefone mutável
    var SPMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
    },
    spOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(SPMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.telefone').mask(SPMaskBehavior, spOptions);

    });
</script>
</body>
</html>