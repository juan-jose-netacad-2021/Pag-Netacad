<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>Cisco Academy</title>
    
    <!-- Bootstrap core CSS -->
    <!-- {{ asset('/css/miestilo.css') }} -->
    <!--<script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    -->

  <!-- Bootstrap core CSS -->
    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    
    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset ('/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{ asset ('/assets/css/templatemo-grad-school.css')}}">
    <link rel="stylesheet" href="{{ asset ('/assets/css/owl.css')}}">
    <link rel="stylesheet" href="{{ asset ('/assets/css/lightbox.css')}}">


  </head>

<body>

   
  <!--header-->
  <header class="main-header clearfix" role="header">
    <div class="logo">
      <a href="#"><em>Cisco</em> Academy</a>
    </div>
    <a href="#menu" class="menu-link"><i class="fa fa-bars"></i> </a>
    <nav id="menu" class="main-nav" role="navigation">
      <ul class="main-menu">
        <li><a href= "{{ url('/')}}">Inicio</a></li>
        <li class="has-submenu"><a href="">Nosotros</a>
          <ul class="sub-menu">
            <li><a href="{{ url('/#section22')}}">Quienes somos</a></li>
            <li><a href="#section23">Que hacemos</a></li>
            <li><a href="#section24"> Mision</a></li>
            <li><a href="#section25"> Vision</a></li>
          </ul>
        </li>
        <li><a href="#section3">Imagenes</a></li>
        <li><a href="#section4">Instructores</a></li> 
        <li><a href="#section6">Contactanos</a></li> 
    
      </ul>
    </nav>
  </header>


  <!-- start footer-->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2021   
          
           | Tecnet: <a href="https://www.facebook.com/tecnet.networking" rel="sponsored" target="_blank">facebook</a></p>
        </div>
      </div>
    </div>
  </footer>
  </html>