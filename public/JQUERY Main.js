
$(document).ready(function(){
   $("#MenuIcon").click(function(){
        $("#MainMenu").css("left","0px");
        function showMenu(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,100% 100%,0% 100%)");
            $("#MenuIcon").animate({right:'-100'},300);
        }
        setTimeout(showMenu,100);
   });
    
particlesJS("particles-js", {
  "particles": {
    "number": {
      "value": 150,
      "density": {
        "enable": true,
        // "value_area": 800
      }
    },
    "color": {
      "value": "#ffffff"
    },
    "shape": {
      "type": "circle",
      "stroke": {
        "width": 0,
        "color": "#000000"
      },
      "polygon": {
        "nb_sides": 5
      },
      // "image": {
      //   // "src": "img/github.svg",
      //   "width": 100,
      //   "height": 100
      // }
    },
    "opacity": {
      "value": 0.5,
      "random": false,
      "anim": {
        "enable": false,
        "speed": 1,
        "opacity_min": 0.1,
        "sync": false
      }
    },
    "size": {
      "value": 3,
      "random": true,
      "anim": {
        "enable": false,
        "speed": 40,
        "size_min": 0.1,
        "sync": false
      }
    },
    "line_linked": {
      "enable": false,
      // "distance": 150,
      "color": "#ffffff",
      "opacity": 0.4,
      "width": 1
    },
    "move": {
      "enable": true,
      "speed": 6,
      "direction": "none",
      "random": false,
      "straight": false,
      "out_mode": "out",
      "bounce": false,
      "attract": {
        "enable": false,
        "rotateX": 600,
        "rotateY": 1200
      }
    }
  },
  "interactivity": {
    "detect_on": "canvas",
    "events": {
      "onhover": {
        "enable": true,
        "mode": "grab"
      },
      "onclick": {
        "enable": true,
        "mode": "repulse"
      },
      "resize": true
    },
    "modes": {
      "grab": {
        "distance": 200,
        "line_linked": {
          "opacity": 1
        }
      },
      "bubble": {
        "distance": 400,
        "size": 40,
        "duration": 2,
        "opacity": 8,
        "speed": 3
      },
      "repulse": {
        "distance": 200,
        "duration": 0.4
      },
      "push": {
        "particles_nb": 4
      },
      "remove": {
        "particles_nb": 2
      }
    }
  },
  "retina_detect": true
});


/* ---- stats.js config ---- */


    $("#close").click(function(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
    });

$("#matricular").click(function() {

  var current = window.location.href;
  var login = "login"
  var objective = current.concat(login);

 window.location.replace(objective);
});

    // $("#matricular").click(function() {
    // $('html,body').animate({
    //     scrollTop: $(".hero").offset().top},
    //     'slow');
    // $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
    //         function hideMenu(){
    //                 $("#MainMenu").css("left","-300px");
    //             $("#MenuIcon").animate({right:'50'},300);
    //         }
    //     setTimeout(hideMenu,300);
        
    //     function originalLayout(){
    //         $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
    //     }
    //     setTimeout(originalLayout,600);
    //     });



    $("#sobre").click(function() {
    $('html,body').animate({
        scrollTop: $("#sobreprojeto").offset().top},
        'slow');
    $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
        });


    $("#projeto").click(function() {
    $('html,body').animate({
        scrollTop: $("#projetosobre").offset().top},
        'slow');
    $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
        });



    $("#embaixadores").click(function() {
    $('html,body').animate({
        scrollTop: $("#embaixadoressobre").offset().top},
        'slow');
    $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
        });

    $("#programacao").click(function() {
    $('html,body').animate({
        scrollTop: $("#programacaosobre").offset().top},
        'slow');
    $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
        });

    $("#internet").click(function() {
    $('html,body').animate({
        scrollTop: $("#internetinfo").offset().top},
        'slow');
    $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
        });

    $("#email").click(function() {
    $('html,body').animate({
        scrollTop: $("#emailinfo").offset().top},
        'slow');
    $("#MainMenu").css("-webkit-clip-path","polygon(0 0,0% 0,100% 100%,0% 100%)");
            function hideMenu(){
                    $("#MainMenu").css("left","-300px");
                $("#MenuIcon").animate({right:'50'},300);
            }
        setTimeout(hideMenu,300);
        
        function originalLayout(){
            $("#MainMenu").css("-webkit-clip-path","polygon(0 0,100% 0,0% 100%,0% 100%)");
        }
        setTimeout(originalLayout,600);
        });


        $(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollToTop').fadeIn();
        } else {
            $('.scrollToTop').fadeOut();
        }
    });
    
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });



    $("#botao").click(function() {
        var register = "register";
        window.location = window.location.href+register
    });

    $("#videocover").click(function() {
    var video = $("#myvideo").get(0);
    if(video.paused){
      video.play()
    }else {
      video.pause()
    }
    return false;
});

$("#myvideo").bind("pause ended", function() {
    $("#videocover").css("visibility", "visible");
});


});