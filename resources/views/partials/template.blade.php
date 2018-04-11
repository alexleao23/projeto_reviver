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

    //Check fuma    
    if ($('[name=fuma]:checked').val() !== 'PAROU')
    {
        $('.tempoparou').hide()
    }

    $('.fuma').bind('ifChecked uncheck', function() {
        if (this.value == 'PAROU') {
            $('.tempoparou').fadeIn(600)   
        }else{
            $('.tempoparou').fadeOut()
        }
    });

    //Check bebe
    if ($('[name=bebida_alcoolica]:checked').val() === 'NÃO')
    {
        $('.quantobebe').hide()
    }

    $('.bebe').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.quantobebe').fadeIn(600)   
        }else{
            $('.quantobebe').fadeOut()
        }
    });

    //Check incapaz
    if ($('[name=incapaz_realizar_atividades_domesticas]:checked').val() === 'NÃO')
    {
        $('.incapazdeque').hide()
    }

    $('.incapaz').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.incapazdeque').fadeIn(600)   
        }else{
            $('.incapazdeque').fadeOut()
        }
    });

    //Check interfere atividade lazer
    if ($('[name=interferido_atividades_lazer]:checked').val() === 'NÃO')
    {
        $('.maneira').hide()
    }

    $('.interferelazer').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.maneira').fadeIn(600)   
        }else{
            $('.maneira').fadeOut()
        }
    });

    //Check atividadefisica
    if ($('[name=atividade_fisica]:checked').val() === 'NÃO')
    {
        $('.quaisativfisicas').hide()
    }

    $('.atividadefisica').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.quaisativfisicas').fadeIn(600)   
        }else{
            $('.quaisativfisicas').fadeOut()
        }
    });

    //Check atividadelazer
    if ($('[name=atividades_lazer]:checked').val() === 'NÃO')
    {
        $('.ativlazer').hide()
    }

    $('.lazer').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.ativlazer').fadeIn(600)   
        }else{
            $('.ativlazer').fadeOut()
        }
    });

    //Check atividadereligiosa
    if ($('[name=atividades_religiosas]:checked').val() === 'NÃO')
    {
        $('.ativrelig').hide()
    }

    $('.relig').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.ativrelig').fadeIn(600)   
        }else{
            $('.ativrelig').fadeOut()
        }
    });
    //Select sabendo_projeto
    // if ($('[name=sabendo_projeto]').val() === "Outros"){
    //     $('.outrosconheceu').fadeIn(600)
    // }else{
    //     $('.outrosconheceu').fadeOut()
    // }

    // $('.comoconheceu').change(function (){

    //     if(this.val() === "Outros"){
    //         $('.outrosconheceu').fadeIn(600)
    //     }else{
    //         $('.outrosconheceu').fadeOut()
    //     }

    // });
// 
    //Check Medicamentos    
    if ($('[name=uso_medicamentos]:checked').val() === 'NÃO')
    {
        $('.campousamedicamentos').hide()
        // $('.prescrito').addClass('radiohide');
    }

    $('.usamedicamentos').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.campousamedicamentos').fadeIn(600)
            // $('.prescrito').addClass("radiohide") 
        }else{
            $('.campousamedicamentos').fadeOut()
            // $('.prescrito').removeClass("radiohide")
        }
    });
   
    //Check prescrição médica
    if ($('[name=sob_prescricao]:checked').val() === 'NÃO')
    {
        $('.medico').hide()
    }

    $('.prescrito').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.medico').fadeIn(600) 
        }else{
            $('.medico').fadeOut()
        }
    });

    //Check tratamento sem remedio
    if ($('[name=tratamento_smed]:checked').val() === 'NÃO')
    {
        $('.exemplosemmed').hide()
    }

    $('.tratsemmed').bind('ifChecked uncheck', function() {
        if (this.value == 'SIM') {
            $('.exemplosemmed').fadeIn(600) 
        }else{
            $('.exemplosemmed').fadeOut()
        }
    });


    });
</script>
</body>
</html>
