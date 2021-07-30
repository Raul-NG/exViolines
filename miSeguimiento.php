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
  <link rel="stylesheet" href="assets/css/estilos_seguimiento.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Link fuentes https://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <title>Seguimiento</title>
</head>

<body>
<?php include('navbar.php');?>
  <div class="main__container">
    <?php
    $sql = "SELECT * FROM seguimientos WHERE usuario_id = '$_SESSION[user]'";
    $resultado = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($resultado) >0) {
      echo " <div class='encuesta'>
      <h2>Gracias por realizar la encuesta!</h2> 
    </div>";
    } else {
      echo "<div class='preguntas'>
      <form action='./php/add_seguimiento.php' method='post'>
        <div class='title'>Responde brevemente por favor:</div><br>
        <div class='text'>Continúo realizando las actividades que hacia en VFP antes, cual sea tu respuesta menciona el
          porque.</div>
        <textarea name='pregunta_1' id='pregunta_1' cols='40' rows='8'></textarea>
        <div class='text'>Formar parte de VFP me ayudó a desarrollar mis habilidades y talentos,cual sea tu respuesta
          menciona el porque.
        </div>
        <textarea name='pregunta_2' id='pregunta_2' cols='40' rows='8'></textarea>
        <br>
    </div>
    <div class='preguntas'>
        <div class='title'>Dinos como te has sentido después de formar parte de VFP:</div><br>
        <textarea name='pregunta_3' id='pregunta_3' cols='40' rows='8'></textarea>
        <div class='title'>¿Te gustaría asistir a una reunión con tus compañeros?
          </div><br>
        <textarea name='pregunta_4' id='pregunta_4' cols='40' rows='8'></textarea>
        <br>
        <input type='submit' value='Entregar Respuestas'>
      </form>
    </div>
    <div class='preguntas'>
      <div class='title'>Video de Seguimiento</div><br>
      <video width='320' height='240' controls>
        <source src='/imagenes/ExaViolines.mp4' type='video/mp4'>
        Tu Navegador no puede reproducir este video, intenta cambiar a Firefox, Chrom o Edge.
      </video>
    </div>";
    }
    ?>
  </div>
</body>

</html>