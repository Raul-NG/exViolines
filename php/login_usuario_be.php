<?php
    session_start();
    include 'conexion_be.php';

    $correo = $_POST['correo'];
    $password = $_POST['password'];

    $validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo'");
    
    if(mysqli_num_rows($validar_login) >0){
        while($row = mysqli_fetch_assoc($validar_login)){
            $verificar_password = password_verify($password, $row['password']);
            if(password_verify($_POST['password'], $row['password'])){
                $_SESSION['user'] = $row['usuario_id'];
                $_SESSION['loggedin'] = true;
                header("Location: ../inicio.php");
        exit;
            } else {
                echo "Error de contraseña" . " " . $row['password'] . " " . $_POST['password'] . " " . var_dump($verificar_password);
            }
        }
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