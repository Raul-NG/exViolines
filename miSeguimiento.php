<?php
session_start();
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
  <title>Exviolines/Seguimiento</title>
</head>

<body>
<?php include('navbar.php');?>
  <div class="main__container">
    <div class="preguntas">
      <form action="action_page.php">
        <div class="title">Responde brevemente por favor:</div><br>
        <div class="text">Continúo realizando las actividades que hacia en VFP antes, cual sea tu respuesta menciona el
          porque.</div>
        <textarea name="Entrada" id="respuesta" cols="23" rows="5"></textarea>
        <div class="text">Formar parte de VFP me ayudó a desarrollar mis habilidades y talentos,cual sea tu respuesta
          menciona el porque.
        </div>
        <textarea name="Entrada" id="respuesta" cols="23" rows="5"></textarea>
        <br>
        <input type="submit" value="Entregar Respuestas">
      </form>
    </div>
    <div class="preguntas">
      <form action="action_page.php">
        <div class="title">Dinos como te has sentido después de formar parte de VFP:</div><br>
        <textarea name="Entrada" id="respuesta" cols="23" rows="5"></textarea>
        <div class="title">¿Te gustaría asistir a una reunión con tus compañeros?
          </div><br>
        <textarea name="Entrada" id="respuesta" cols="23" rows="5"></textarea>
        <br>
        <input type="submit" value="Entregar Respuestas">
      </form>
    </div>
    <div class="preguntas">
      <div class="title">Video de Seguimiento</div><br>
      <video width="320" height="240" controls>
        <source src="/imagenes/ExaViolines.mp4" type="video/mp4">
        Tu Navegador no puede reproducir este video, intenta cambiar a Firefox, Chrom o Edge.
      </video>
    </div>
  </div>
</body>

</html>