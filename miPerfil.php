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
  <title>Exviolines/miPerfil</title>
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
                    <img src="imagenes/perfiles/perfil-1.jpg" class="card-img-top perfil-foto">
                    <div class="card-body">
                        <h2 class="text-center perfil-nombre">Juanito Alcachofa</h2>
                        <p class="text-center perfil-antiguedad">ExViolin desde 24 de mayo del 2021</p>
                        <table class="table table-borderless">
                            <tr>
                                <td><b>Email</b></td>
                                <td class="perfil-email">fulano@hotmail.com</td>
                            </tr>
                            <tr>
                                <td><b>Puntos acumulados</b></td>
                                <td class="perfil-puntos">42069</td>
                            </tr>
                            <tr>
                                <td><b>Grado de egreso</b></td>
                                <td class="perfil-grado">2</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-8 mt-3">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center m-2">
                            <button type="button" class="btn btn-danger btn-lg cerrar-sesion">Cerrar sesion</button>
                        </div>
                        <div class="my-4">
                            <h3>Próximo evento</h3>
                            <img src="imagenes/evento_proximo.jpg" class="img-fluid">
                        </div>
                        <h3>Modificar perfil</h3>
                        <!--INFORMACION-->
                        <div class="form input-group mb-3 mt-3">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nuevo Nombre">
                            <button type="button" class="btn btn-primary perfil-cambiar-nombre">Cambiar nombre</button>
                        </div>
                        <div class="form input-group mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nuevos Apellidos">
                            <button type="button" class="btn btn-primary perfil-cambiar-apellido">Cambiar apellidos</button>
                        </div>

                        <div class="form input-group mb-3">
                            <input type="email" class="form-control" id="floatingInput" placeholder="nuevo@correo.com">
                            <button type="button" class="btn btn-primary perfil-cambiar-email">Cambiar email</button>
                        </div>
                        <div class="form input-group mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nueva contraseña">
                            <button type="button" class="btn btn-primary perfil-cambiar-pass">Cambiar contraseña</button>
                        </div>
                        <div class="text-center">
                            <button type="button perfil-btn-eliminar" class="btn btn-dark">Eliminar cuenta</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="alert alert-success m-3 perfil-success" role="alert">
            Datos cambiados exitosamente! Recargue la pagina
        </div>

    </div>
    
</section>

</body>

</html>