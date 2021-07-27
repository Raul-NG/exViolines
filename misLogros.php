<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="/css/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Link fuentes https://fonts.google.com -->
    <link
      href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap"
      rel="stylesheet"
    />
    <title>Logros</title>
  </head>
  <body>
  <?php include('navbar.php');?>
    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
          <div class="card">
            <img src="./imagenes/medalla.jpg" class="card-img-top"
              alt="Palomitas, boletos para el cine y rollo de película" />
            <div class="card-body">
              <h2 class="card-title">Mis Puntos</h2>
              <p class="card-points">
                2100 Puntos 
              </p>
              <p class="card-text">
                Tus puntos acumulados por haber completado los retos.
              </p>
              <div class="center-button">
                <a href="/miPerfil.html">
                  <button type="button" class="btn btn-primary">Ir a mi Perfil</button>
                </a>
              </div>
            </div>
          </div>
        </div>
  </body>
</html>
