<?php
session_start();
include './php/conexion_be.php';
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="./assets/css/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Link fuentes https://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <title>Mis Retos</title>
</head>

<body>
<?php include('navbar.php');?>

  <h1 class="h1-pags">Mis Retos</h1>
    <div class="container mt-5 mb-5">
      <div class="row justify-content-center">
        <h3>Por entregar</h3>
    <?php
      $retos = mysqli_query($conexion, "SELECT retos.nombre, categoria, puntos, descripcion, image_id, reto_id FROM retos
      JOIN usuarios ON retos.grado_id = usuarios.grado_id
      WHERE usuarios.usuario_id = '$_SESSION[user]' AND retos.reto_id
      NOT IN
      (SELECT logros.reto_id FROM logros
      WHERE usuario_id = '$_SESSION[user]')");
      while( $row = mysqli_fetch_assoc($retos)) {
        echo "
        <div class='col-12 col-sm-6 col-md-4 col-lg-4 mt-3'>
          <div class='card'>
            <img src='./imagenes/retos_imagenes/reto" . $row['image_id'] . ".jpg' class='card-img-top'
              alt='Palomitas, boletos para el cine y rollo de película' />
            <div class='card-body'>
              <h2 class='card-title'>" . $row['nombre'] . " </h2>
              <p class='card-grado'> " .
                $row['categoria'] .
              " </p>
              <p class='card-points'> " . 
                "-/" . $row['puntos'] . " Puntos
              </p>
              <p class='card-text'> " .
                $row['descripcion'] .
              " </p>
              <div class='center-button'>
                <a href='./recursosRetos/reto" . $row['image_id'] . ".jpg' download='Reading and vocabulary'>
                  <button type='button' class='btn btn-primary'>Descargar Recurso</button>
                </a>
              </div>
              Sube tu evidencia aqui
              <form action='./php/upload_file.php' method='post' enctype='multipart/form-data'>
                <input type='hidden' name='reto' value='" . $row['reto_id'] . "' />
                <input type='file' name='file' id='file'>
                <input type='submit' name='submit' value='Entregar'>
              </form>
            </div>
          </div>
        </div>";} 
    ?>
    <div style="padding: 15px;">
      <h3>Entregados</h3>
    </div>
    <?php
      $retos = mysqli_query($conexion, "SELECT * FROM logros
      JOIN retos ON logros.reto_id = retos.reto_id
      WHERE usuario_id = '$_SESSION[user]' AND retos.reto_id");
      while( $row = mysqli_fetch_assoc($retos)) {
        echo "
        <div class='col-12 col-sm-6 col-md-4 col-lg-4 mt-3'>
          <div class='card'>
            <img src='./imagenes/retos_imagenes/reto" . $row['image_id'] . ".jpg' class='card-img-top'
              alt='Palomitas, boletos para el cine y rollo de película' />
            <div class='card-body'>
              <h2 class='card-title'>" . $row['nombre'] . " </h2>
              <p class='card-grado'> " .
                $row['categoria'] .
              " </p>
              <p class='card-points' > " . 
              $row['puntos'] . "/" . $row['puntos'] . " Puntos
              </p>
              <p style='text-align:center; font-size:30px;'> <span>&#9989;</span></p>
            </div>
          </div>
        </div>";} 
    ?>
      </div>
    </div>
</body>

</html>