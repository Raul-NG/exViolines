<?php

include 'conexion_be.php';

$sql = "SELECT usuarios.nombre as usuario_nombre, apellido, usuarios.grado_id, retos.nombre as reto_nombre, logros.fecha, file_name from usuarios 
join logros on logros.usuario_id = usuarios.usuario_id
join retos on retos.reto_id = logros.reto_id;";

$get_activities = mysqli_query($conexion, $sql);

if (mysqli_num_rows($get_activities) > 0) {
    echo "
    <h2>Actividades entregadas</h2>
    <table class='table'>
        <tr>
            <th>Usuario</th>
            <th>Grado</th>
            <th>Reto</th>
            <th>Fecha</th>
            <th>Archivo</th>
        </tr>";
    while ($row = mysqli_fetch_assoc($get_activities)) {
        echo "
        <tr>
            <td> " . $row['usuario_nombre'] . " " . $row['apellido'] . " </td><td> " . $row['grado_id'] . " </td><td> " . $row['reto_nombre'] . " </td><td> " . $row['fecha'] . " </td><td> <a href='./uploads/" . $row['file_name'] . "' download> Descargar archivo </a> </td>
        </tr>";
    }
    echo "</table>";
}
?>

