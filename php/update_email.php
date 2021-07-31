<?php
    session_start();
    include 'conexion_be.php';
    
    $dato = $_POST['dato'];

    $actualizar = mysqli_query($conexion, "UPDATE usuarios SET correo = '$dato' WHERE usuario_id = '$_SESSION[user]'");

    if ($actualizar) {
        header('location: ../miPerfil.php');
        exit;
    } else {
        header('location: ../miPerfil.php');
        exit;
    }
?>