<?php
session_start();
include 'conexion_be.php';

$pregunta_1 = $_POST['pregunta_1'];
$pregunta_2 = $_POST['pregunta_2'];
$pregunta_3 = $_POST['pregunta_3'];
$pregunta_4 = $_POST['pregunta_4'];

$sql = "INSERT INTO seguimientos (usuario_id, pregunta_1, pregunta_2, pregunta_3, pregunta_4) VALUES ('$_SESSION[user]','$pregunta_1', '$pregunta_2', '$pregunta_3', '$pregunta_4')";

$seguimiento = mysqli_query($conexion, $sql);

if ($seguimiento) {
    header('Location: ../miseguimiento.php');
} else {
    echo 'Error al insertar datos en la tabla';
}

?>