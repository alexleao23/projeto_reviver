<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
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

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
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
        </style>
        <div class="wrapper" style="height: auto; min-height: 100%;">
            @include('partials.header')
            <!-- Full Width Column -->
            <div class="content-wrapper" style="min-height: 217px; background: url('{{ URL::asset('backgroundsson.jpg') }}') no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
                <div class="container">
                <!-- Content Header (Page header) -->
                    <section class="content-header">
                        @yield('content-header')
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        @yield('content')
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

    //Máscara de peso mutável
    var PesoMaskBehavior = function (val) {
      return val.replace(/\D/g, '').length === 5 ? '000.00' : '00.009';
    },
    pesoOptions = {
      onKeyPress: function(val, e, field, options) {
          field.mask(PesoMaskBehavior.apply({}, arguments), options);
        }
    };

    $('.peso').mask(PesoMaskBehavior, pesoOptions);



    //Alteração de campos no questionário baseado nas escolhas
    $(".outros").hide();
    $(".comoconheceu").change(function () {
           if ($(this).val() === "Outros") {
                    $(".outros").show();
                }else{
                    $(".outros").hide();
                } 
    });

    $(".outrostempo").hide();
    $(".tempodoenca").change(function () {
           if ($(this).val() === "Outro") {
                    $(".outrostempo").show();
                }else{
                    $(".outrostempo").hide();
                } 
    });

    $(".tempofuma").hide();
    $(".fuma").change(function () {
           if ($(this).val() === "PAROU") {
                    $(".tempofuma").show();
                }else{
                    $(".tempofuma").hide();
                } 
    });

    $(".campousamedicamentos").hide();
    $(".usamedicamentos").change(function () {
      $(".campousamedicamentos").toggle();
    });

    $(".quantobebe").hide();
    $(".bebe").change(function () {
      $(".quantobebe").toggle();
    });

    $(".campomedico").hide();
    $(".campoprescrito").change(function () {
      $(".campomedico").toggle();
    });

    $(".tratamentossemmed").hide();
    $(".realizatratamentossemmed").change(function () {
      $(".tratamentossemmed").toggle();
    });

    $(".campodomestica").hide();
    $(".incapazdomestica").change(function () {
      $(".campodomestica").toggle();
    });

    $(".campolazer").hide();
    $(".camporealizalazer").change(function () {
      $(".campolazer").toggle();
    });

    $(".maneira").hide();
    $(".teminterferido").change(function () {
      $(".maneira").toggle();
    });

    $(".atividadefisica").hide();
    $(".realizafisica").change(function () {
      $(".atividadefisica").toggle();
    });

    $(".atividadereligiosa").hide();
    $(".realizareligiosa").change(function () {
      $(".atividadereligiosa").toggle();
    });

    $(".qualconsistencia").hide();
    $(".restricaoconsistencia").change(function () {
      $(".qualconsistencia").toggle();
    });

    $(".qualprotese").hide();
    $(".protese").change(function () {
      $(".qualprotese").toggle();
    });

    $(".quaisdoencas").hide();
    $(".presencadoencas").change(function () {
      $(".quaisdoencas").toggle();
    });

    $(".nomevitaminico").hide();
    $(".vitaminico").change(function () {
      $(".nomevitaminico").toggle();
    });

    $(".qualrefeicao").hide();
    $(".tomacomendo").change(function () {
      $(".qualrefeicao").toggle();
    });


    });
</script>
</body>
</html>
