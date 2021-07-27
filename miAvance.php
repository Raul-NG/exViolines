<?php
session_start();
?>

<html>
    <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="/assets/css/estilos.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- Link fuentes https://fonts.google.com -->
    <link href="https://fonts.googleapis.com/css2?family=Yanone+Kaffeesatz:wght@300&display=swap" rel="stylesheet" />
    <title>Exviolines/Avance</title>
    </head>

    <body>
    <?php include('navbar.php');?>
    <div class="main__container">
        <div class="cover
            d-flex
            justify-content-start
            align-items-center
            flex-column">
        </div>
        <div class="progress__container">
        <div class="retos__container">
            <div class="reto">
            <h3>Reading and vocabulary </h1>
            <h3>Status:</h2>
            <div class="status__completado">Completado</div>
            </div>
            <div class="reto">
            <h3>Present simple - negative and positive sentences</h1>
            <h3>Status:</h2>
            <div class="status__completado">Completado</div>
            </div>
            <div class="reto">
            <h3>La jungle et ses animaux</h1>
            <h3>Status:</h2>
            <div class="status__completado">Completado</div>
            </div>
            <div class="reto">
            <h3>Verbe être et avoir</h1>
            <h3>Status:</h2>
            <div class="status__sincompletar">Pendiente</div>
            </div>
            <div class="reto">
            <h3>Meistermaler</h1>
            <h3>Status:</h2>
            <div class="status__sincompletar">Pendiente</div>
            </div>
            <div class="reto">
            <h3>Fragenkette</h1>
            <h3>Status:</h2>
            <div class="status__sincompletar">Pendiente</div>
            </div>
        </div>
        <div class="gris-claro bar">
            <div id="myBar" class="progress-bar bar" style="width:0%">0%</div>
        </div>
        <br>
        <div class="btn__container">
            <button class="btn btn-outline-light" onclick="move()">Ver Mi Progresso</button>
        </div>
        </div>
    </div>
    <script src="/assets/js/scriptMiAvance.js"></script>
    </body>

</html>