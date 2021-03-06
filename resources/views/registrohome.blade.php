<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Projeto REVIVER</title>
  <link rel="shortcut icon" href="/favicon.gif"/>
  <link rel="stylesheet" href="style.css" media="screen">
  <script src="bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>
  <script src="JQUERY%20Main.js"></script>
  <script type="text/javascript" src="materializeadmin/js/plugins.js"></script>
<script src="{{ asset('particlesjs/particles.js') }}"></script>
  {{-- <script src="particlesjs/particles.min.js"></script> --}}
  {{-- <script src="particlesjs/demo/js/app.js"></script> --}}
  <script src="stellar/jquery.stellar.min.js"></script>
  <script>
    $("document").ready(function() {
      setTimeout(function() {
          $("#MenuIcon").trigger('click');
      },1);
    });
    $("document").ready(function() {
      setTimeout(function() {
          $("#close").trigger('click');
      },1);
    });
  </script>
</head>
<body>
    {{-- @if (isset($success))
      <div id="card-alert" class="card gradient-45deg-purple-amber">
        <div class="card-content white-text">
          <p>
            <div style="text-align: center;">
              <i class="material-icons">success</i> 
            </div>
          </p>
        </div>
        <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
    @endif   --}}
    <div style="z-index: 99999999" id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
        <a href="#" class="scrollToTop"></a>
        
        <div id="MenuIcon">
        <div id="MenuLine"></div>
        </div>

        {{-- Session::flash('sucesso') --}}
  <section class="hero overlay" data-stellar-background-ratio="0.3">
    <div id="particles-js"></div>
    <div style="z-index: 2" id="botao" class="button">
        <a href="cadastro">Cadastre-se <span class="shift">›</span></a>
        <div class="mask"></div>
    </div>
    <img style="margin: 0 auto;" src="logomain.png" alt="">
       
      
    </div>
  </section>

  <section id="sobreprojeto" class="wrapper">
    <div class="content">
      <h2>Bem-vindo ao projeto reviver</h2>
      <p style="text-align: justify;">O Projeto Reviver é uma iniciativa do Laboratório de Química Farmacêutica Medicinal – PharMedChem da Universidade Federal do Amapá, que trabalha com uma equipe multidisciplinar de médicos, farmacêuticos, enfermeiros, nutricionistas, educadores físicos, psicólogos e fisioterapeutas, para acompanhar pacientes portadores de Doença de Parkinson e/ou Doença de Alzheimer e seus familiares/cuidadores.
	  </p>
    <div>
  </section>

  <section class="middle overlay" data-stellar-background-ratio="0.3">
    <div class="content">
      <h2 id="projetosobre">O Projeto</h2>
      <div id="videocover">
      <video id="myvideo" width="850" controls controlsList="nodownload" poster="poster.png">
            <source src="projeto.mp4" type="video/mp4">
            <-- source src="mov_bbb.ogg" type="video/ogg" -->
            Your browser does not support HTML5 video.
        </video>
      </div><br>
      <p style="text-align: justify;">
        A Doença de Parkinson e a Doença de Alzheimer são doenças crônico-não transmissíveis comuns em idosos. As alterações presentes nestas afecções geram uma grande incapacidade funcional em seus portadores e consequentemente uma queda na qualidade de vida dos mesmos. É de grande importância que a Doença de Parkinson e a Doença de Alzheimer sejam tratadas de maneira multiprofissional e acima de tudo projetadas de acordo com cada caso e envolvendo estratégias para o paciente e seus familiares ou cuidadores. O Projeto Reviver foi criado com o intuito de prover cuidados multiprofissional visando a qualidade de vida de portadores de Doença de Parkinson e Doença de Alzheimer e seus familiares/cuidadores. Desta forma, é possível prestar a devida assistência à esses pacientes e seus familiares/cuidadores, retardando ao máximo a progressão dessas doenças.
      </p>
      {{-- <a class="btn" href="#">Click Here</a> --}}
    <div>
  </section>

  <section class="wrapper">
    <div class="content">
      <h2 id="embaixadoressobre">Equipe</h2>
      
       <h3>Coordenadoras</h3><p style="text-align: center;">Prof.ª Dr.ª Lorane Hage Melim e Prof.ª MSc. Viviane Cardoso</p>
      <br>
      <h3>Medicina</h3><p style="text-align: center;"> Dr. Anderson Ferraz e Dr. Alessandro Nunes <br>(médicos parceiros)</p>
                        <p style="text-align: center;"> Prof.ª MSc. Viviane Cardoso <br>(coordenadora)</p>
                        
      <br>
      <h3>Enfermagem</h3><p style="text-align: center;"> Prof.ª Dr.ª Marlucilena Pinheiro <br>(coordenadora)</p>
                          <p style="text-align: center;"> Prof.ª Esp. Maira Beatrine de Rocha <br>(enfermeira)</p>
                          <p style="text-align: center;"> Prof.ª Dr.ª Maria Izabel Tentes Côrtes <br>(enfermeira)</p>
                          <p style="text-align: center;"> Lorenna Leal de Moraes <br>(enfermeira)</p>
      <br>
      <h3>Farmácia</h3><p style="text-align: center;"> Profª Drª Lorane Hage Melim <br>(coordenadora)</p><br>
                        <p style="text-align: center;"> Bianca Marino <br>(farmacêutica)</p><br>
                        <p style="text-align: center;"> Heitor Ribeiro <br>(farmacêutico)</p><br>
                        <p style="text-align: center;"> Jaderson Ferreira <br>(farmacêutico)</p><br>
                        <p style="text-align: center;"> Lucilene Rocha <br>(farmacêutica)</p><br>
      <br>
      <h3>Fisioterapia</h3><p style="text-align: center;"> Prof. Esp. Cleuton Landre e Prof.ª Esp. Kátia Cirilo <br>(coordenadores)</p>
      <br>
      <h3>Nutrição</h3><p style="text-align: center;"> Prof.ª MSc. Susy Érika <br>(coordenadora)</p>
      <br>
      <h3>Educação Física</h3>
      <p style="text-align: center;">Prof. Dr. Demilto Yamaguchi <br> (coordenador)</p>
      <br>
      <h3>Psicologia</h3>
      <p style="text-align: center;">Marcilene Sena <br>(coordenadora)</p>
      <br>
      <p style="text-align: center;">Larissa Souza <br>(psicóloga)</p>
      <br>
      <p style="text-align: center;"> Lidiane Lima<br>(psicóloga)</p>
      <br>
      <h3>Ciência da Computação</h3>
      <p style="text-align: center;">Prof MSc. Thiago Nascimento <br> (coordenador)</p>
      <br>
      <h3>&</h3>
      <p style="text-align: center;">Acadêmicos de todas as áreas</p>

    <div>
  </section>

  <section class="lower overlay" data-stellar-background-ratio="0.3">
    <div class="content">
      <h2 id="internetinfo">Uma iniciativa</h2>
       <img src="pharmed.png" style="margin-left: 20%;margin-right: 100px;">
       <img src="amapaloginn.png" style="margin-right: 100px;">
       {{-- <img src="logo.png"> --}}
    </div>
  </section>

  <section class="wrapper">
    

  </section>

{{--   <section class="bottom">
    <div class="content">
      <p style="text-align: center;">UNIFAP - Universidade Federal do Amapá - 2018</p>
      <p style="text-align: center; font-size: 15px;">João Victor Machado de Andrade</p>
      <p style="text-align: center; font-size: 15px;">Alexander Silva de Leão</p>
    </div>
  </section> --}}
          
          <div id="MainMenu">
            <ul>  
        
            <strong>P R O J E T O</strong><br>
            <strong>R E V I V E R</strong><br>
              <li id="sobre">BEM-VINDO<div class="line"></div></li>
              <li id="projeto">O PROJETO<div class="line"></div></li>
              <li id="embaixadores">EQUIPE<div class="line"></div></li>
              <li id="programacao">PROGRAMAÇÃO<div class="line"></div></li>
              <li id="matricular">MEMBRO DA EQUIPE?<div class="line"></div></li>
              <li><div style="margin-top:30px" id="close">
                <div class="outer">
                  <div class="inner">
                    <label>Fechar</label>
                  </div>
                </div>
                </div></li>
            </ul>

            
        </div>



  <script>
    $.stellar();
  </script>
</body>
</html>
