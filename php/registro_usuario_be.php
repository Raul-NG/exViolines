<?php

    include 'conexion_be.php';

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $grado_id = $_POST['grado_id'];
    //Si se quisiera encriptar la contrasena esta la siguiente linea de codigo
    //$contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO alumno(nombre, apellidos, correo, password, grado_id)
    VALUES ('$nombre', '$apellido', '$correo', '$contrasena', '$grado_id')";

    //Verficiar que el correo no se repita en la Base de Datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM alumno WHERE correo='$correo' ");

    if(mysqli_num_rows($verificar_correo) >0){
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../login.php";
            </script>
        
        ';
        exit();
    }

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario almacenado correctamente");
                window.location = "../login.php";
            </script>

        ';
    }else{
        echo '
        <script>
            alert("Intentalo de nuevo usuario no almacenado");
            window.location = "../login.php";
        </script>

    ';
    }

    mysqli_close($conexion);

?>