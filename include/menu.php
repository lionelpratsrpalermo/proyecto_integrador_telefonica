<?php
function menu()
{  ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://www.revistapalermo.com.ar/images/logo.png" alt="" class="img-fluid">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="formulario.php">Formulario</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="pagina2.php">Página 2</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Servicios
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Tabuladas</a></li>
              <li><a class="dropdown-item" href="#">Cátedra electrónica</a></li>
              <li><a class="dropdown-item" href="#">Resultados</a></li>
            </ul>
          </li>
        </ul>
      </div>

      <div class="d-none d-lg-block">
        <a href="login.php" class="btn btn-danger text-light me-2">Login</a>
        <a href="register.php" class="btn btn-danger text-light">Registrarse</a>
      </div>
    </div>
  </nav>

  <br><br><br><br><br>

  <div class="d-lg-none">
    <a href="login.php" class="btn btn-danger text-light me-2">Login</a>
    <a href="register.php" class="btn btn-danger text-light">Registrarse</a>
  </div>

  <br><br>



<?php
}
?>