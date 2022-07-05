<?php include("./administrador/config/conexionBD.php"); ?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta name="theme-color" content="#e34d4d">

  <meta content="Fitcamp club activa nos ofrece esos servicios para garantizar una vida saludable tanto mentalmente como fisicamente, ven descubre a esta familia." name="description">
  <meta name="google" content="Fitcamp Club Activa" />
  <meta name="keywords" content="fitcamp, fitcamp club activa, activa, club activa"/>
  <meta name="author" content="fitcamp club activa" />
  <meta name="copyright" content="fitcamp club activa" />


  <!-- LINK DE ICON -->
  <link href="./img/vida-saludable.png" rel="icon">
    <!-- LINK DE CSS -->
  <link rel="stylesheet" href="./css/style.css">
  <link href="./main.82cfd66e.css" rel="stylesheet">

  <title>Contacto</title>  

</head>

<body>

<header class="">
  <div class="navbar navbar-default visible-xs">
    <button type="button" class="navbar-toggle collapsed">
      <span class="sr-only"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a href="./" class="navbar-brand" title="FitCamp-Club-Activa">FitCamp Club Activa</a>
  </div>

  <nav class="sidebar">
    <div class="navbar-collapse" id="navbar-collapse">
      <div class="site-header hidden-xs">
          <a class="site-brand" href="./" title="FitCamp-Club-Activa">
          <img class="img-logo site-logo" alt="" src="./img/vida-saludable.png">
            FitCamp Club Activa
          </a>
        <p>Todo lo que inviertas en nutrición, Te ahorrarás en medicina.</p>
      </div>

      <ul class="nav">
        <li><a href="./" title="Fitcamp-Club-Activa">Inicio</a></li>
        <li><a href="./about" title="Mi-proceso-para-iniciar-mi-Fitcamp-club-activa">Cuéntame</a></li>
        <li><a href="./services" title="Servicios-que-brinda-fitcamp-club-activa">Servicios</a></li>
        <li><a href="./contact" title="Contactame-Fitcamp-club-activa">Contacto</a></li>
      </ul>

      <!-- template/footer.php include  -->
        <?php include("./template/footer.php"); ?>
        
    </div> 
  </nav>
</header>
 
<main class="" id="main-collapse">

<div class="row">
  <div class="col-xs-12">
    <div class="section-container-spacer">
      <h1>Contactame</h1>
      <p>Completa los datos correspondientes y, si no, cuentas con correo electrónico(email) no es necesario puedes colocar tu número telefónico o puedes contactarme al número referido y con gusto te atenderé.</p>
    </div>
    <div class="section-container-spacer">

    <form action="./contact.php" method="POST" class="reveal-content">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" name="email" id="email" placeholder="Email o Teléfono" required="required">
              </div>
              <div class="form-group">
                <input type="text" class="form-control"  name="fullname" id="subject" placeholder="Nombre Completo" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" rows="3" name="message" placeholder="Inserte el mensaje" required></textarea>
              </div>
              <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
            </div>
            <div class="col-md-6">
              <ul class="list-unstyled address-container">
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </span>
                  <a href="https://walink.co/1303d9" class="link-social" target="_blank" title="link-whatsapp-fitcamp-club-activa">+591 677-228-46</a>
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa-at" aria-hidden="true"></i>
                  </span>
                  <a href="mailto:fitcampclubactiva@gmail.com" class="link-social" target="_blank" title="enviar-email-fitcamp-club-activa">fitcampclubactiva@gmail.com</a>
                </li>
                <li>
                  <span class="fa-icon">
                    <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                  </span>
                  <a href="https://goo.gl/maps/GnwDKqTBhFyXtWnL9" target="_blank" class="link-social" title="link-ubicacion-FitCamp-Club-Activa">Ubicación</a>
                </li>
              </ul>
              <h3>Encuéntrame en mis redes</h3>
              <a href="#" title="pagina-facebook-FitCamp-Club-Activa" class="fa-icon" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
              <a href="https://walink.co/1303d9" title="link-whatsapp-FitCamp-Club-Activa" class="fa-icon" target="_blank">
                <i class="fa fa-whatsapp"></i>
              </a>
              <a href="mailto:fitcampclubactiva@gmail.com" title="enviar-email-fitcamp-club-activa" class="fa-icon" target="_blank">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </form>

    </div>
  </div>
</div>
<div class="content-ubicacion">
<iframe src="https://www.google.com/maps/embed?pb=!1m26!1m12!1m3!1d3797.361773035755!2d-63.17219358181327!3d-17.868529546289267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m11!3e2!4m3!3m2!1d-17.8683187!2d-63.1712588!4m5!1s0x93f1eb3f81b18b7d%3A0x67b71e3a76dd8351!2sfit%20camp%20club%20activa!3m2!1d-17.8683068!2d-63.1712522!5e0!3m2!1ses!2sbo!4v1655753962097!5m2!1ses!2sbo" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="ubicacion"></iframe>
  </div>

</main>


<script>
document.addEventListener("DOMContentLoaded", function (event) {
  navbarToggleSidebar();
  navActivePage();
});
</script>

<script type="text/javascript" src="./main.85741bff.js"></script>

</body>

</html>