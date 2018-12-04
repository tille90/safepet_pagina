
@extends('layouts.app')

@section('content')

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    

     <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" >

    <!-- Custom fonts for this template -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    
    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('device-mockups/device-mockups.min.css')}}">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/new-age.css')}}" rel="stylesheet">

  <body id="body">
    <div id="body"></div>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="/"><img height="40" src="{{{ asset('img/SafepetLogoLargo.png')}}}"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#features">Características</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#download">Descargas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#publicidad">Publicidad</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
            </li>
          </ul>
          <ul class="navbar-nav">
               @if (Auth::guest())
                        <li class="nav-item"><a href="{{ url('/login') }}">Ingreso Admin</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} 
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a class="nav-link js-scroll-trigger" href="{{ url('/admin/publicidad') }}"><i class="fa fa-btn"></i>Ir a consola</a></li>
                                <li><a class="nav-link js-scroll-trigger" href="{{ url('/logout') }}"><i class="fa fa-btn"></i>Cerrar Sesión</a></li>
                            </ul>
                        </li>
                    @endif
          </ul>
        </div>
      </div>
    </nav>
   

    <header class="masthead">
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-7 my-auto">
            <div class="header-content mx-auto">

              <h1 class="mb-5">SafePet, La nueva red social para amantes de las mascotas, descúbrela!</h1>
              <a href="#download" class="btn btn-outline btn-xl js-scroll-trigger">Descárgala gratis!</a>
            </div>
          </div>
          <div class="col-lg-5 my-auto">
            <div class="device-container">
              <div class="device-mockup galaxy_s5 portrait">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img width="285" height="500" src="img/wireframe1.png" class="img-fluid" alt="">
                  </div>
                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
</section>
    
    <section class="features" id="features">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Una aplicación para ti y tus mascotas</h2>
          <p class="text-muted">SafePet cuenta con diferentes funciones!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              <div class="device-mockup galaxy_s5 portrait">
                <div class="device">
                  <div class="screen">
                    <!-- Demo image for screen mockup, you can put an image here, some HTML, an animation, video, or anything else! -->
                    <img width="285" height="500" src="img/wireframe2.png" class="img-fluid" alt="">
                  </div>
                  <div class="button">
                    <!-- You can hook the "home button" to some JavaScript events or just remove it -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fas fa-address-card text-primary"></i>
                    <h3>Perfil de usuario</h3>
                    <p class="text-muted">Crea y mantén tu perfil de usuario, incluso para tus mascotas!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-camera text-primary"></i>
                    <h3>Comparte imagenes</h3>
                    <p class="text-muted">Comparte las mejores imágenes de tus compañeros animales!</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="icon-present text-primary"></i>
                    <h3>Gratuita, Para Siempre</h3>
                    <p class="text-muted">SafePet no tiene costo alguno, Para eso si te alcanza!</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fas fa-globe-americas text-primary"></i>
                    <h3>Busca a tus mascotas</h3>
                    <p class="text-muted">Puedes enviar alertas en caso de que tus mascotas se pierdan!</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="download bg-primary text-center" id="download">
      <div class="container">
        <div class="row">
          <div class="col-md-8 mx-auto">
            <h2 class="section-heading">Descubre lo que puede hacer SafePet!</h2>
            <p>Nuestra aplicación está disponible para dispositivos Android! ¡Descárgalo ahora para empezar!</p>
            <div class="badges">
              <a class="badge-link" href="https://play.google.com"><img src="img/google-play-badge.svg" alt=""></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="cta" id="publicidad">
      <div class="cta-content">
        <div class="container">
          <h2>¿Buscas promover tus productos o servicios?</h2>
        </div>
      </div>
      <div class="overlay"></div>
    </section>

    <section class="features" id="business">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Promueve tu negocio en SafePet</h2>
          <p class="text-muted">Espacios publicitarios!</p>
          <hr>
        </div>
        <div class="row">
          <div class="col-lg-4 my-auto">
            <div class="device-container">
              
            </div>
            <div class="feature-item">
                    <i class="fas fa-box"></i>
                    <h3>Muestra tus productos</h3>
                    <p class="text-muted">¿Nuevos productos? Publica aqui!</p>
                  </div>
                  <div class="feature-item">
                    <i class="fas fa-bullseye"></i>
                    <h3>Segmento de clientes</h3>
                    <p class="text-muted">Llega a potenciales clientes interesados</p>
                  </div>
          </div>
          <div class="col-lg-8 my-auto">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fas fa-bullhorn"></i>
                    <h3>Anuncios</h3>
                    <p class="text-muted">Personaliza y publica diferentes anuncios en la aplicación</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="fas fa-calendar-alt"></i>
                    <h3>Tiempo</h3>
                    <p class="text-muted">Elige el tiempo que quieras para promover tus productos o servicios</p>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="  fas fa-chart-pie"></i>
                    <h3>Estadísticas</h3>
                    <p class="text-muted">Consigue reportes estadísticos sobre el estado de tus publicaciones</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="feature-item">
                    <i class="  fas fa-glasses"></i>
                    <h3>Tendencias</h3>
                    <p class="text-muted">Enterate sobre lo que las personas están necesitando</p>
                  </div>
                </div>                
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <section class="contact" id="contact">
          <div class="container">
            <div class="section-heading text-center">
          <h2>Para contratación de servicios de publicidad, contáctanos</h2>
          <p class="text-muted">Rellena el formulario!</p>
          
        </div>
        
            @include('inicio.contacto')
          </div>
    </section>



     <section class="contact bg-primary" id="contact">
      <div class="container">
        <h2>Nosotros
          <i class="fas fa-heart"></i>
          a los nuevos amigos!</h2>
        <ul class="list-inline list-social">
          <li class="list-inline-item social-facebook">
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
          </li>
          <li class="list-inline-item social-google-plus">
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </section>
  


    <footer>
      <div class="container">
        <p>&copy; Altice Soluciones 2018. Todos los derechos reservados.</p>
        
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="{{{asset('vendor/jquery/jquery.min.js')}}}"></script>
    <script src="{{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{{asset('vendor/jquery-easing/jquery.easing.min.js')}}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{{asset('js/new-age.min.js')}}}"></script>


@endsection