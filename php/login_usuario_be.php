<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];


    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'
                    and password= '$contrasena' ");

    if(mysqli_num_rows($validar_login) >0){
        while($row = mysqli_fetch_assoc($validar_login)){
            $_SESSION['user'] = $row['usuario_id'];
        }
        $_SESSION['loggedin'] = true;
        header("Location: ../inicio.php");
        exit;
    }else{
        echo '
        
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../login.php";
            </script>
        
        ';

        exit;
    }

?>