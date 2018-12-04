<!DOCTYPE html> 
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="{{asset('img/safepetLogo.png')}}">
    <title>SafePet</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('admin/css/font-awesome.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('admin/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('admin/css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('admin/img/apple-touch-icon.png')}}">

  </head>
  <body class="hold-transition skin-yellow sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/admin/publicidad" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b><img width="25" height="25" src="{{asset('img/safepetLogo.png')}}"></b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b><img height="40" src="{{{ asset('img/SafepetLogoLargo.png')}}}">SafePet</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
               @if (Auth::guest())
                        <li class="nav-item"><a href="{{ url('/login') }}">Ingreso Admin</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <i class="fa fa-angle-down pull-down"></i>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a class="nav-link js-scroll-trigger" href="{{ url('/admin/publicidad') }}"><i class="fa fa-btn"></i>Ir a consola</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="{{ url('/') }}"><i class="fa fa-btn"></i>Ir a lobby</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="{{ url('/logout') }}"><i class="fa fa-btn"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    @endif
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header"></li>
            <li class="treeview">
              <a href="/admin/estadisticas/dashboard">
                <i class="fa fa-money"></i>
                <span>Pagos</span>
                <i class="fa fa-angle-left pull-right"></i>                
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/publicidad') }}"><i class="fa fa-circle-o"></i> Lista de pagos</a></li>
                <li><a href="{{ url('/admin/publicidad/create') }}"><i class="fa fa-circle-o"></i> Ingresar Pago</a></li>
              </ul>
              
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bullhorn"></i>
                <span>Publicidad</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/publicidad') }}"><i class="fa fa-circle-o"></i> Listado</a></li>
                <li><a href="{{ url('/admin/publicidad/create') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-user"></i>
                <span>Usuarios</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ url('/admin/usuario') }}"><i class="fa fa-circle-o"></i> Listado</a></li>
                <li><a href="{{ url('/admin/usuario/create') }}"><i class="fa fa-circle-o"></i> Crear</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-paw"></i>
                <span>Mascotas</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{url('/admin/mascotas')}}"><i class="fa fa-circle-o"></i> Listado General</a></li>
              </ul>
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-folder"></i> <span>Administradores</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="/register"><i class="fa fa-circle-o"></i> Registrar<br>Administrador nuevo</a></li>
                
              </ul>
            </li>
             
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title">Sistema de administración SAFEPET</h3>
                  <div class="box-tools pull-right">
                    <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    
                    <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                  </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                          <!--Contenido-->
                              		@yield('contenido')

		                          <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
          



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Versión</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2018 <a href="/">SafePet</a>.</strong> Todos los derechos reservados.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('admin/js/jQuery-2.1.4.min.js')}}"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('admin/js/bootstrap.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/js/app.min.js')}}"></script>
    
  </body>
</html>
