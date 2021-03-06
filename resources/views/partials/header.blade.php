<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ route('homepage') }}" class="navbar-brand"><i class="fa fa-hospital-o"></i> Projeto <b>Reviver</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Usuários </strong><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                @can('create', App\User::class)
                  <li><a href="{{ route('register') }}">Cadastrar Usuário</a></li>
                  <li class="divider"></li>
                @endcan
                <li><a href="{{ route('users_index') }}">Todos os Usuários</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Responsáveis </strong><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ action('ResponsaveisController@create') }}">Cadastrar Responsável</a></li>
                <li class="divider"></li>
                <li><a href="{{ action('ResponsaveisController@index') }}">Todos os Responsáveis</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong>Pacientes </strong><span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ action('PacientesController@create') }}">Cadastrar Paciente</a></li>
                <li class="divider"></li>
                <li><a href="{{ action('PacientesController@index') }}">Todos os Pacientes</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search" method="get" action="{{ action('PacientesController@index') }}">
            <div class="form-group">
              <input type="text" class="form-control" value="{{ request()->get('search') }}" name="search" id="navbar-search-input" placeholder="Buscar paciente">
            </div>
          </form>
        </div>
        <!-- /.navbar-collapse -->
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->
            <li class="dropdown messages-menu">
              <!-- Menu toggle button -->
            <!-- Notifications Menu -->
            
            <!-- Tasks Menu -->
            
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="{{ asset('uploads/avatars/default.jpg') }}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><strong>{{ Auth::user()->short_name }}</strong></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{ asset('uploads/avatars/default.jpg') }}" class="img-circle" alt="User Image">

                  <p>
                    <strong>{{ Auth::user()->short_name }}</strong>
                    <small><strong>{{ Auth::user()->perfil }}</strong></small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
                  </div>
                  <div class="pull-right">
                    <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sair</a>
                {{ Form::open(['route'=>'logout', 'id'=>'logout-form']) }}
                {{ Form::close() }}
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        <!-- /.navbar-custom-menu -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </header>