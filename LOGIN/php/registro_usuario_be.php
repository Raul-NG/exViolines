<?php

    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $grado = $_POST['grado'];
    //Si se quisiera encriptar la contrasena esta la siguiente linea de codigo
    //$contrasena = hash('sha512', $contrasena);

    $query = "INSERT INTO usuarios(nombre_completo, correo, contrasena, grado)
              VALUES('$nombre_completo','$correo', '$contrasena', '$grado')";

    //Verficiar que el correo no se repita en la Base de Datos

    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' ");

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