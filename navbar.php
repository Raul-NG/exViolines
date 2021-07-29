<nav class="
          navbar navbar-expand-lg navbar-dark
          bg-dark
          flex-column flex-sm-row
        ">
      <a class="navbar-brand" href="./inicio.php">Violines por la Paz A.C.</a>
      <div class="container-fluid justify-content-end">
        <ul class="nav">
        <?php
        if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){
            $out = '
            <li class="nav-item"> <a class="nav-link" href="misRetos.php">Mis Retos</a> </li>
            <li class="nav-item"> <a class="nav-link" href="misLogros.php">Mis Logros</a> </li>
            <li class="nav-item"> <a class="nav-link" href="miSeguimiento.php">Mi Seguimiento</a> </li>
            <li class="nav-item"> <a class="nav-link" href="miperfil.php">Mi Perfil</a> </li>';
        }else{
            $out = '<li class="nav-item"> <a class="nav-link active" aria-current="page" href="login.php">Iniciar sesión o Registrarse</a> </li>';
        }
        echo $out;
      ?>   
        </ul>
      </div>
    </nav>