<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="icon" href="img/movistar.png" />
  <?php
  include("include/menu.php");
  ?>
</head>

<body class="container-fluid">

  <?php menu();   ?>

  <div class="alert alert-primary text-center" role="alert">
    <h3 class="fst-italic">Práctica envío de datos al servidor.</h3>
  </div>
  <br><br>

  <!-- Formulario -->
  <div class="row">
    <div class="col-3"></div>
    <div class="col-6">
      <form action="formulario_destino.php" method="POST">
        <div class="form-group mb-4">
          <label for="nombre" class="mb-2">Nombre del usuario.</label>
          <input type="text" name="nombre" id="nombre" placeholder="Escriba su nombre" class="form-control">
        </div>
        <div class="form-group mb-4">
          <label for="nombre" class="mb-2">Apellido del usuario.</label>
          <input type="text" name="apellido" id="apellido" placeholder="Escriba su apellido" class="form-control">
        </div>
        <div class="form-group">
          <label for="nombre" class="mb-2">Password.</label>
          <input type="password" name="password" id="password" placeholder="Escriba su contraseña" class="form-control">
        </div>
        <br>
        <hr size="2px" color="black" />
        <h6>Seleccione lenguajes preferidos</h6>
        <div class="form-group">
          <input type="checkbox" name="lenguaje1" id="lenguaje1" value="php">
          <label for="lenguaje1">PHP</label>
          <br>
          <input type="checkbox" name="lenguaje2" id="lenguaje2" value="ruby">
          <label for="lenguaje2">Ruby</label>
          <br>
          <input type="checkbox" name="lenguaje3" id="lenguaje3" value="simphony">
          <label for="lenguaje3">Simphony</label>
        </div>
        <hr size="2px" color="black" />
        <fieldset>
          <legend>Seleccione su nivel de inglés.</legend>
          <div class="form-group">
            <label for="">
              <input type="radio" name="nivel" id="" value="alto" checked>
              Alto
            </label>
            <br>
            <label for="">
              <input type="radio" name="nivel" id="" value="medio">
              Medio
            </label>
            <br>
            <label for="">
              <input type="radio" name="nivel" id="" value="bajo">
              Bajo
            </label>
          </div>
        </fieldset>
        <hr size="2px" color="black" />
        <div class="form-group">
          <label for="selector1">Seleccione el motivo de su contacto. </label>
          <select name="selector1" id="selector1" class="text-capitalize">
            <option value="consulta" class="text-capitalize">consulta</option>
            <option value="sugerencia" class="text-capitalize">sugerencia</option>
            <option value="queja" class="text-capitalize" selected>queja</option>
          </select>
        </div>
        <hr size="2px" color="black" />

        <button type="submit" class="btn btn-success container-fluid">Enviar datos</button>
      </form>
    </div>
    <div class="col-3"></div>
  </div>

</body>

</html>
<script src="js/bootstrap.bundle.min.js"></script>