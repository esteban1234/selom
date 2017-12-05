
<?php include 'encabezado2.php' ?>
<body>
	
   <header>
  <div class="fondo">
    <figure class="logo pull-left">
      <img src="../img/selom.png" alt="SELOM" class="img-responsive">
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
    <a class="navbar-brand" href="../index.php">TURISMO Y VIAJES</a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
    <ul class="nav navbar-nav">
      <li><a href="../index.php">INICIO</a></li>
      <li><a href="nosotros.php">NOSOTROS</a></li>
      <li><a href="servicios.php">SERVICIOS</a></li>
      <li class="active"><a href="contacto.php">CONTACTO</a></li>
    </ul>
  </div>
</nav>
<br><br>
<div class="container">
  <div class="row">
      <h1 class="tit-fc" style="text-align:center">Formulario de contacto</h1>
  </div>
  <div class="row">
      <h4 style="text-align:center">Por favor déjenos su mensaje y en breve nos comunicaremos con usted.</h4>
  </div>
  <form class="row input-container">
      <div class="col-xs-12">
        <div class="styled-input wide">
          <input type="text" id="txtNOMBRE" required />
          <label>Nombre completo</label> 
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-sm-12">
        <div class="styled-input">
          <input type="text" id="txtCORREO" required />
          <label>Email</label> 
        </div>
      </div>
      <div class="col-sm-6 col-md-6 col-sm-12">
        <div class="styled-input" style="float:right;">
          <input type="text" id="txtTELEFONO" required />
          <label>Numero teléfonico</label> 
        </div>
      </div>
      <div class="col-xs-12">
        <div class="styled-input wide">
          <textarea id="txtCOMENTARIO" required></textarea>
          <label>Comentario</label>
        </div>
      </div>
      
      <div class="col-xs-12 bnt-contacto">
        <div id="_AJAX_PRE_"></div>
        <div class="btn-lrg submit-btn" onclick="sendCORREO()">Enviar Mensaje</div>
      </div>
  </form>
</div>

<div class="mapa">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.5578334520415!2d-93.12162538597855!3d16.748899988464157!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd8f513ba91df%3A0xa8a5f527199a12a!2sAv.+Sexta+Sur+Pte.+367%2C+El+Calvario%2C+29000+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1512515318236" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<div class="section" style="padding: 5% 0%;">
  <div class="container">
<div class="row text-center">
        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-envelope fa-3x text-colored"></i>
            <h4>CORREO</h4> 
            <a href="mailto:info@comercializadorazerbo.com" class="text-muted">info@selomviajes.com</a>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-map-marker fa-3x text-colored"></i>
            <h4>DIRECCION</h4>

            <address class="text-muted">
            Av. 6A Sur Poniente #367.
            COL. San Pascualito, Tuxtla Gutierrez, Chiapas.
            C.P. 29000<br>
          </address>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-clock-o fa-3x text-colored"></i>
            <h4>HORARIO</h4>
            <h4 class="text-muted">Lunes a Viernes de 9 am a 6 pm</h4>
          </div>
        </div>

        <div class="col-sm-6 col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-phone fa-3x text-colored"></i>
            <h4>TELEFONO</h4>
            <h4 class="text-muted">PENDIENTE</h4>
          </div>
        </div>
      </div>
    </div>
  </div>

  



<a class="go-top" href="#">Subir</a>
<?php include 'pie.php' ?>

<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/arriba.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/contacto.js"></script>
</body>
</html>