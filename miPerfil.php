<?php
session_start();
include './php/conexion_be.php';
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
  <link rel="stylesheet" href="./assets/css/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Link fuentes https://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <title>Mi Perfil</title>
</head>

<body>
  <div>
    <?php include('navbar.php');?>
<!--HASTA AQUI BARRA E INICIO DE LA CABECERA-->
<section class="resumen-perfil">
    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">

            <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
                <div class="card">
                    <?php
                    $info = mysqli_query($conexion, "SELECT usuario_id, nombre, apellido, grado_id, fecha FROM exviolines.usuarios
                    WHERE correo = '$_SESSION[user]'");
                    while( $row = mysqli_fetch_assoc($info)) {
                        echo "<img src='https://robohash.org/". $row['usuario_id'] ."&size=300x300' class='card-img-top perfil-foto'>
                        <div class='card-body'>
                            <h2 class='text-center perfil-nombre'>". $row['nombre'] . " " . $row["apellido"] ."</h2>
                            <p class='text-center perfil-antiguedad'>ExViolin desde ". $row['fecha'] ."</p>
                            <table class='table table-borderless'>
                                <tr>
                                    <td><b>Email</b></td>
                                    <td class='perfil-email'>". $_SESSION['user'] ."</td>
                                </tr>
                                <tr>
                                    <td><b>Grado de egreso</b></td>
                                    <td class='perfil-grado'>". $row['grado_id'] ."</td>
                                </tr>
                            </table>
                        </div>";
                    }
                    ?>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-8 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-2">
                            <a type="button" class="btn btn-danger btn-lg cerrar-sesion" href="./php/logout_user.php">Cerrar sesion</a>
                        </div>
                        <div class="my-4">
                            <h3>Próximo evento</h3>
                            <img src="imagenes/evento_proximo.jpg" class="img-fluid">
                        </div>
                        <h3>Modificar perfil</h3>
                        <!--INFORMACION-->
                        <form action="./php/update_nombre.php" method="post">
                            <div class="form input-group mb-3 mt-3">
                                <input type="text" name= "dato" class="form-control" id="floatingInput" placeholder="Nuevo nombre">
                                <button class="btn btn-primary perfil-cambiar-nombre">Cambiar nombre</button>
                            </div>
                        </form>
                        <form action="./php/update_apellido.php" method="post">
                            <div class="form input-group mb-3 mt-3">
                                <input type="text" name= "dato" class="form-control" id="floatingInput" placeholder="Nuevo apellido">
                                <button class="btn btn-primary perfil-cambiar-nombre">Cambiar apellido</button>
                            </div>
                        </form>
                        <form action="./php/update_email.php" method="post">
                            <div class="form input-group mb-3 mt-3">
                                <input type="text" name= "dato" class="form-control" id="floatingInput" placeholder="nuevo@correo.com">
                                <button class="btn btn-primary perfil-cambiar-nombre">Cambiar email</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>

</body>

</html>