<?php
    session_start();
    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];
    $puntos = $_POST['puntos'];
    $grado_id = $_POST['grado_id'];

    
    $add_reto = "INSERT INTO `retos` (`nombre`, `categoria`, `descripcion`, `puntos`, `grado_id`) VALUES ('$nombre', '$categoria', '$descripcion', '$puntos', '$grado_id')";

    $insert = mysqli_query($conexion, $add_reto);
    
    if ($insert) {
        $get_id = "SELECT reto_id FROM retos WHERE nombre = '$nombre'";
        $id = mysqli_query($conexion, $get_id);
        $id = mysqli_fetch_assoc($id);
        $id = $id['reto_id'];
    }
    $temp = explode(".", $_FILES["imagen"]["name"]);
    move_uploaded_file($_FILES["imagen"]["tmp_name"], "../imagenes/reto" . $id . "." . end($temp));
    $temp = explode(".", $_FILES["recurso"]["name"]);
    move_uploaded_file($_FILES["recurso"]["tmp_name"], "../recursos/reto" . $id . "." . end($temp));
    header("Location: ../admin_dashboard.php");
?>