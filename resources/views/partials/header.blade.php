<header class="main-header" style="z-index: 9999">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href="{{ url('/admin') }}" class="navbar-brand"><i class="fa fa-hospital-o"></i> Projeto <b>Reviver</b></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <i class="fa fa-bars"></i>
          </button>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            {{-- @can('create', App\User::class)
              <li class="{{ request()->is('admin/register') ? 'active' : '' }}"><a href="{{ url('/admin/register') }}">Cadastrar Usuário <span class="sr-only">(current)</span></a></li>
            @endcan --}}
            {{-- <li class="{{ request()->is('admin/pacientes/create') ? 'active' : '' }}"><a href="{{ url('/admin/pacientes/create') }}">Cadastrar Paciente</a></li> --}}
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuários <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                @can('create', App\User::class)
                  <li><a href="{{ url('/admin/register') }}">Cadastrar Usuário</a></li>
                  <li class="divider"></li>
                @endcan
                <li><a href="#">Todos os Usuários</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Responsáveis <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Cadastrar Responsável</a></li>
                <li class="divider"></li>
                <li><a href="#">Todos os Responsáveis</a></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pacientes <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/admin/pacientes/create') }}">Cadastrar Paciente</a></li>
                <li class="divider"></li>
                <li><a href="#">Todos os Pacientes</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Campo de busca a decidir">
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
                <img src="{{ asset('bower_components/AdminLTE/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs">{{ Auth::user()->short_name }}</span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="{{ asset('bower_components/AdminLTE/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">

                  <p>
                    {{ Auth::user()->short_name }}
                    <small>{{ Auth::user()->perfil }}</small>
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