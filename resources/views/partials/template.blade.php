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
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{ asset('bower_components/AdminLTE/dist/css/skins/_all-skins.min.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="skin-blue layout-top-nav" style="height: auto; min-height: 100%;">
  <div class="wrapper" style="height: auto; min-height: 100%;">
    @include('partials.header')
    <!-- Full Width Column -->
    <div class="content-wrapper" style="min-height: 217px; background: url('{{ URL::asset('backgroundsson.jpg') }}') no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;">
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
    <!-- /.content-wrapper -->
  </div>
    @include('partials.footer')

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
</body>
</html>
