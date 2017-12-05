<!DOCTYPE html>
<?php include 'vistas/encabezado.php' ?>
<body>

<header>
  <div class="fondo">
    <figure class="logo pull-left">
      <img src="img/selom.png" alt="SELOM" class="img-responsive">
    </figure>
    <h1 class="pull-right tith">TURISMO Y VIAJES</h1>
  </div>
</header>

<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">TURISMO Y VIAJES</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li class="active"><a href="index.php">INICIO</a></li>
      <li><a href="vistas/nosotros.php">NOSOTROS</a></li>
      <li><a href="vistas/servicios.php">SERVICIOS</a></li>
      <li><a href="vistas/contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</nav>

<div class="banner">
  
</div>

<div class="section" style="padding: 5% 0%;">
      <div class="container">
        <h1 class="text-center tit">VIAJES</h1>
        <div class="row">
          <div class="col-md-4">
            <figure class="imagen">
              
            </figure>
            <h2 class="text-center">PUERTO VALLARTA</h2>
            <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p> -->
          </div>
          <div class="col-md-4">
            <figure class="imagen2">
              
            </figure>
            <h2 class="text-center">TENACATITA</h2>
            <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p> -->
          </div>
          <div class="col-md-4">
            <figure class="imagen3">
              
            </figure>
            <h2 class="text-center" style="text-transform: uppercase;">Cancun, Sureste</h2>
            <!-- <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisici elit,
              <br>sed eiusmod tempor incidunt ut labore et dolore magna aliqua.
              <br>Ut enim ad minim veniam, quis nostrud</p> -->
          </div>
        </div>
      </div>
    </div>

    <div class="section" style="padding: 5% 0%; background-color:  #fad7a0 ;">
      <div class="container">
        <div class="row">
          <p class="pull-left text-btn">Será un placer atender su solicitud...</p>
          <a class="pull-right" href="vistas/contacto.php"><button type="button" class="btn btn-primary btn-lg">¡SOLICITA UNA COTIZACION!</button></a>
        </div>
      </div>
    </div>

<a class="go-top" href="#">Subir</a>
<?php include 'vistas/pie.php' ?>


<script src="js/jquery.js"></script>
<script src="js/menu.js"></script>
<script src="js/slide.js"></script>
<script src="js/arriba.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>