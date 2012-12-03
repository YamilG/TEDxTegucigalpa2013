<?php

  $nombre = $_POST["nombre"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "me@yamilgonzales.com";
  $subject = "TEDxTegucigalpa Contacto";
  $body = "Nombre: $nombre \nEmail: $email \nMensaje: $message";
  $headers = "From: no-reply@tedxtegucigalpa.org";


  mail($to, $subject, $body, $headers);
?>
<!DOCTYPE html>
<html lang="es-419">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="TEDxTegucigalpa es una conferencia donde personas talentosas comparten ideas que vale la pena difundir." />
        <meta name="keywords" content="ted, tedx, tedxtegucigalpa, evento, tegucigalpa, honduras" />
        <meta name="web_author" content="Yamil Gonzales" />
        <title>TEDxTegucigalpa</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link href='http://fonts.googleapis.com/css?family=Crete+Round' rel='stylesheet' type='text/css'>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>



        <div class="container-fluid">

            <div class="row-fluid">
                <header class="span12" id="encabezado">
                    <h1>TEDxTegucigalpa</h1>
                </header>
            </div>

            <div class="row-fluid">
                <section class="span8" id="thankyou">
                  <p>¡Gracias por tu contacto! un miembre del equipo te responderá pronto.</p>
                  <a href="index.html"><button class="btn">Vuelve a TEDxTegucigalpa.</button></a>
                </section>

            </div>

        </div>

    </body>
</html>