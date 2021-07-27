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
  <link rel="stylesheet" href="assets/css/estilos.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <!-- Link fuentes https://fonts.google.com -->
  <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
  <title>Exviolines/Retos</title>
</head>

<body>
<?php include('navbar.php');?>

  <h1 class="h1-pags">Mis Retos</h1>
  <div class="container mt-5 mb-5">
    <div class="row justify-content-center">
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto1.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 1: Reading and vocabulary</h2>
            <p class="card-grado">
              Grado: 1ro - 3ro
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Read carefully what the monster says and answer the questions below. You can write the answers or upload a
              picture of them.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto1.jpg" download="Reading and vocabulary">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto2.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 2: Present Simple - Negative and Positive Sentences</h2>
            <p class="card-grado">
              Grado: 4to - 6to
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Fill the blanks with the correct form of present simple of each verb in parentheses, some of them are
              positive and others are negative. You can write the answers or upload a picture of them.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto2.jpg" download="Present Simple - Negative and Positive Sentences">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto3.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 3: La jungle et ses animaux</h2>
            <p class="card-grado">
              Grado: 1ro - 3ro
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Associez le mot à l'image correspondante.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto3.jpg" download="La Jungle et ses Animaux">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto4.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 4: Verbe être et avoir</h2>
            <p class="card-grado">
              Grado: 3ro - 6to
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Résoudre les éléments suivants être.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto4.jpg" download="Verbe être et avoir">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto5.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 5: Meistermaler</h2>
            <p class="card-grado">
              Grado: 1ro - 3ro
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Dibuja cada objeto con su color correspondiente.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto5.jpg" download="Meistermaler">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto6.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 6: Fragenkette</h2>
            <p class="card-grado">
              Grado: 4to - 6to
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Recorta las oraciones por recuadros, revuelve las y ordena las de primera a última.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto6.jpg" download="Fragenkette">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto7.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 7: Escritura creativa </h2>
            <p class="card-grado">
              Grado: 1ro - 3ro
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Lea las intrucciones del recurso y realize las actividades indicadas.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto7.jpg" download="Escritura creativa">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto8.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 8: Crea tu cuento</h2>
            <p class="card-grado">
              Grado: 4to - 6to
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              ● Crea tu propio cuento, deberá tener un un principio, trama y desenlace como se muestra en foto
              ● Haz un dibujo que presente tu cuento, tomale una foto y subelo.

            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto8.jpg" download="Crea tu cuento">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto9.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 9: Historia de las artes marciales</h2>
            <p class="card-grado">
              Grado: 1ro - 3ro
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Cuéntanos con tus propias palabras un poco de la historia del arte marcial de tu preferencia. Puedes subir
              un video tuyo contándola o escribirla en el espacio de abajo.
            </p>
            <div class="center-button">
              <a href="path_to_file" download="No Requiere Recurso">
                <button type="button" class="btn btn-primary">No Requiere Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto10.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 10: Demostrando movimientos básicos</h2>
            <p class="card-grado">
              Grado: 4to - 6to
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Sube un video tuyo mostrando 5 movimientos básicos del arte marcial de tu preferencia y dinos como se
              llaman.
            </p>
            <div class="center-button">
              <a href="path_to_file" download="No requiere recurso">
                <button type="button" class="btn btn-primary">No Requiere Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto11.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 11: Matematicas</h2>
            <p class="card-grado">
              Grado: 1ro - 3ro
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Resuelve cada ejercicio de acuerdo a las indicaciones.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto11-1.jpg" download="Matematicas 1">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
        <div class="card">
          <img src="/imagenes/retos_imagenes/reto12.jpg" class="card-img-top"
            alt="Palomitas, boletos para el cine y rollo de película" />
          <div class="card-body">
            <h2 class="card-title">Reto 12: Matematicas</h2>
            <p class="card-grado">
              Grado: 4to - 6to
            </p>
            <p class="card-points">
              10 Puntos
            </p>
            <p class="card-text">
              Resuelve cada ejercicio de acuerdo a las indicaciones.
            </p>
            <div class="center-button">
              <a href="/recursosRetos/reto12-1.jpg" download="Matematicas 2">
                <button type="button" class="btn btn-primary">Descargar Recurso</button>
              </a>
            </div>
            Sube tu evidencia aqui
            <form action="/action_page.php">
              <input type="file" id="myFile" name="filename">
              <input type="submit">
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>