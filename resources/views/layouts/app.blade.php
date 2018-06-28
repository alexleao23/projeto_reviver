<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 4.0
  Author: PIXINVENT
  Author URL: https://themeforest.net/user/pixinvent/portfolio
================================================================================ -->
  <head>
    {{-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> --}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template,">
    <title>@yield('title')</title>
    <!-- Favicons-->
    {{--<link rel="icon" href="{{ asset('materializeadmin/images/favicon/favicon.gif') }}" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="materializeadmin/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png"> --}}
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="materializeadmin/css/themes/semi-dark-menu/materialize.css" type="text/css" rel="stylesheet">
    <link href="materializeadmin/css/themes/semi-dark-menu/style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="materializeadmin/css/custom/custom.css" type="text/css" rel="stylesheet">
    <link href="materializeadmin/css/layouts/page-center.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="materializeadmin/vendors/perfect-scrollbar/perfect-scrollbar.css" type="text/css" rel="stylesheet">
  </head>
  <body>
    <div class="video-responsive">
    <video autoplay loop poster="boxmundo.png" class="bg_video">
      <source src="backgroundvideo.webm" type="video/webm">
      <source src="backgroundvideo.mp4" type="video/mp4">
    </video>
    </div> 
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    @yield('content')

    <!-- ================================================
    Scripts
    ================================================ -->
    <!-- jQuery Library -->
    <script type="text/javascript" src="materializeadmin/vendors/jquery-3.2.1.min.js"></script>
    <!--materialize js-->
    <script type="text/javascript" src="materializeadmin/js/materialize.min.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="materializeadmin/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <!-- JQuery Mask -->
    <script src="{{  asset('jquerymask/dist/jquery.mask.js') }}"></script>
    <script src="{{  asset('js/masksson.js') }}"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="materializeadmin/js/plugins.js"></script>
    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="materializeadmin/js/custom-script.js"></script>
  

    {{-- video responsivo --}}
{{-- <script src="canvas-video-player.js"></script>
 --}}      <script>

      var isIOS = /iPad|iPhone|iPod/.test(navigator.platform);

      if (isIOS) {

          var canvasVideo = new CanvasVideoPlayer({
              videoSelector: '.video',
              canvasSelector: '.canvas',
              timelineSelector: false,
              autoplay: true,
              makeLoop: true,
              pauseOnClick: false,
              audio: false
          });

      }else {

          // Use HTML5 video
          document.querySelectorAll('.canvas')[0].style.display = 'none';

      }   

      </script>
      <script>
 $(document).ready(function(){
        // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
        $('.modal').modal({
              dismissible: false, // Modal can be dismissed by clicking outside of the modal
              opacity: .5, // Opacity of modal background
              inDuration: 300, // Transition in duration
              outDuration: 200, // Transition out duration
              startingTop: '4%', // Starting top style attribute
              endingTop: '10%', // Ending top style attribute
              ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
              // alert("Ready");
              console.log(modal, trigger);
            }});
         $('#responsive-modal').modal('open');

      });
      </script>

  </body>
</html>