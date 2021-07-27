<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords"
    content="Violines Por La Paz, México, niños, educación, arte, cultura, vfpmexico, deportes, valores" />
  <meta name="description"
    content="Nuestro camino aún no termina. Sigue alcanzando nuevas metas y no
    pierdas el contacto con tus amigos. En Violines por la Paz A.C. buscamos que todos los niños tengan una educación integral y balanceada." />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Link fuentes https://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <title>Exviolines</title>
</head>

<body>
  <div>
    <nav class="
          navbar navbar-expand-lg navbar-dark
          bg-dark
          flex-column flex-sm-row
        ">
      <a class="navbar-brand" href="http://vfpmexico.org/">Violines por la Paz A.C.</a>
      <div class="container-fluid justify-content-end">
        <ul class="nav">
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            $out = '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a> </li>
          <li class="nav-item"> <a class="nav-link" href="miAvance.php">Mi Avance</a> </li>
          <li class="nav-item"> <a class="nav-link" href="misRetos.html">Mis Retos</a> </li>
          <li class="nav-item"> <a class="nav-link" href="misLogros.html">Mis Logros</a> </li>
          <li class="nav-item"> <a class="nav-link" href="miSeguimiento.html">Mi Seguimiento</a> </li>
          <li class="nav-item"> <a class="nav-link" href="php/logout_user.php">Cerrar sesion</a> </li>';
        }else{
            $out = '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="login.php">Iniciar sesión o Registrarse</a> </li>';
        }
        echo $out;
      ?>   
        </ul>
      </div>
    </nav>
    <div class="
          cover
          d-flex
          justify-content-start
          align-items-center
          flex-column
        ">
      <a href="http://vfpmexico.org/">
        <img id="imagen-logo" src="assets/images/Violines.png" alt="Logo de Violines por la Paz A.C." />
      </a>
      <h1 id="h1-inicio">EXAVIOLINES</h1>
      <h2 id="h2-inicio">¡TODOS TENEMOS TALENTO, SOLO FALTA ENCONTRARLO!</h2>
      <p id="p1-inicio">
        Nuestro camino aún no termina. Sigue alcanzando nuevas metas y no
        pierdas el contacto con tus amigos.
      </p>
      <div class="btn-group" role="group" aria-label="Basic example">
        <a href="login.html">
          <button type="button" class="btn btn-outline-light">
            Iniciar Sesión
          </button>
        </a>
        <a href="login.html">
          <button type="button" class="btn btn-outline-light">
            Crear Cuenta
          </button>
        </a>
      </div>
    </div>
  </div>
</body>

</html>