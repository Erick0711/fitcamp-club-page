<?php
  $emailUsuario = $_POST['email'];
  $nombreUsuario = $_POST['fullname'];
  $mensajeUsuario = $_POST['message'];
  $titulo="Fitcamp Club Activa";
  $destinatario = "fitcampclubactiva@gmail.com";

  // Las 2 primeras lineas habilitan el informe de errores
  ini_set( 'display_errors', 1 );
  error_reporting( E_ALL );

  // de quien es el mensaje
  $from = $emailUsuario;
  // para quien es el mensaje
  $para = $destinatario;
  // asunto del mensaje
  $asunto = "MAS INFORMACION ACERCA DE FITCAMP CLUB ACTIVA !IMPORTANTE!";
  // cual es el mensaje
  $mensaje = "
  <html>
  <body>
<div style='
            min-width: 80%;
            height: 60%;
            border: 1px solid #99939385;
            border-radius: 1rem;
            text-align: center;
            box-shadow: 1px 5px 5px 1px rgba(161, 156, 156, 0.753);
            padding: 10px 0 10px 0;
            margin: 25px
    '>

        <nav 
        class='flex-header flex'>
        <img style='
            max-width: 3rem;
            min-width: 3rem;
            height: auto;
            margin-right: 2rem;
        '
        
        src='https://cdn-icons-png.flaticon.com/512/4310/4310163.png' alt='logo-fitcamp-club-activa'>
        <h1 style='color:rgb(207, 122, 41);font-family: cursive;'>FIT-CAMP CLUB ACTIVA</h1>
        </nav>
          <div>
              <h2><strong>Quisiera más información</strong></h2>
              <h5><strong>$nombreUsuario</strong></h5>
              <p>$emailUsuario</p>
              <hr style='max-width:80%;'>
              <p>$mensajeUsuario</p>
              <button style='background-color:#be4444;padding: 0.5rem; border-radius: 1rem;color: #fff;border: none;'>Sitio Web</button>
          </div>
  
  </body>
  </html>";

  //para el envío en formato HTML 
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  // More headers
  $headers .= "From: <$from>" . "\r\n";
  $headers .= "Cc: $destinatario" . "\r\n";

  // esta funcion ejecuta el correo PHP
  $sendMail = mail($para, $asunto, $mensaje, $headers);

//   if( $sendMail ) {
//     echo json_encode(array(
//       'error' => false,
//       'mensaje' => "Mensaje Enviado 😉"
//     ));
//   } else {
//     echo json_encode(array(
//       'error' => true,
//       'mensaje' => "Hubo un problema al enviar su mensaje. Intentélo mas terde."
//     ));
//   } 

  header('Location:./');
?>