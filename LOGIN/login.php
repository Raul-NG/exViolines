<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Registro</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="assets/css/estilos_login.css">
</head>

<body>

    <main>

        <div class="contenedor_todo">

            <div class="caja_trasera">

                <div class="caja_trasera-login">

                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la pagina</p>
                    <button id="btn_iniciar-sesion">Iniciar sesión</button>

                </div>

                <div class="caja_trasera-register">

                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn_registrarse">Regístrarse</button>

                </div>

            </div>

            <!-- Formularios de Login y Register-->
            <div class="contenedor_login-register">

                <!-- Formulario de Login-->
                <!-- Los id de los inputs no estan definidos, 
                    para que le puedan poner ustedes el nombre que prefiera-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario_login">

                    <h2>Inicia sesión</h2>
                    <input type="text" placeholder="Correo Electronico" name="correo" required>
                    <input type="password" placeholder="Contraseña" name="contrasena" required>
                    <button>Entrar</button>

                </form>

                <!-- Formulario de Registro-->
                <!-- Los id de los inputs no estan definidos, 
                    para que le puedan poner ustedes el nombre que prefiera-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario_register">

                    <!--Si necesitan otra entrada avisenme (Hugo)-->
                    <h2>Regístrarse</h2>
                    <input typer="text" placeholder="Nombre Completo" name="nombre_completo" required>
                    <input typer="text" placeholder="Correo Electronico" name="correo" required>
                    <input typer="password" placeholder="Contraseña" name="contrasena" required>
                    <select name="grado" required>
                        <option value="" disable selected hidden>Selecciona tu Grado</option>
                        <option>Primero</option>
                        <option>Segundo</option>
                        <option>Tercero</option>
                    </select>

                    <button>Registrarse</button>

                </form>

            </div>

        </div>

    </main>
    <!--Script para efectos visuales del login -->
    <script src="assets/js/script_login.js"></script>
</body>

</html>