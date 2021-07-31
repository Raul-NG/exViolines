<!-- Query for seeing who has delivered the activities

Download activities(zip, click on link to download specific activity)

Create new activity -->

<!DOCTYPE html>
<html lang="en">

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
  <link rel="stylesheet" href="./assets/css/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Link fuentes https://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <title>Mi Perfil</title>
</head>


<?php
    session_start();
    if ($_SESSION['rol'] != 'admin') {
        header("Location: ./inicio.php");
    } else {
        include './navbar.php';
        include './php/get_user_finished_activities.php';
        echo "<a href='./php/download_zip.php' class='download btn btn-info' role='button' style=''>Descargar todos los archivos</a>";
    }
?>