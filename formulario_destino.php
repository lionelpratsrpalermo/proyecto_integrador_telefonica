<?php

echo "<pre>";
print_r($_POST);
echo "</pre>";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];

if (isset($_POST['lenguaje1']))
    $lenguaje1 = $_POST['lenguaje1'];
else
    $lenguaje1 = '';
if (isset($_POST['lenguaje2']))
    $lenguaje2 = $_POST['lenguaje2'];
else
    $lenguaje2 = '';
if (isset($_POST['lenguaje3']))
    $lenguaje3 = $_POST['lenguaje3'];
else
    $lenguaje3 = '';

if (isset($_POST['nivel']))
    $nivel = $_POST['nivel'];
else
    $nivel = '';

$selector1 = $_POST['selector1'];
/* if ($_POST) {
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
} */
echo $nombre . "<br>";
echo $apellido . "<br>";
echo $password . "<br>";
if ($lenguaje1)
    echo "Te gusta " . $lenguaje1 . "!<br>";
else
    echo "PHP no te gusta <br>";
if ($lenguaje2)
    echo "Te gusta " .  $lenguaje2 . "!<br>";
else
    echo "Ruby no te gusta <br>";
if ($lenguaje3)
    echo "Te gusta " .  $lenguaje3 . "!<br>";
else
    echo "Simphony no te gusta <br>";
if ($nivel)
    echo "Nivel de inglés $nivel<br>";
else
    echo "No seleccionó nivel de inglés<br>";
echo "Motivo del contacto: $selector1<br>";

/* $gorda = 'cachas';
if (isset($gorda)) {
    if ($gorda)
        echo "Tomatelas gorda $gorda!!";
    else
        echo "Cagamos, el Viernes que viene empieza una gorda...";
} else
    echo "Por fin, todas putas cogibles!!!"; */
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body class="container-fluid">
    <br><br><br>
    <a href="formulario.php" class="btn btn-primary">Volver</a>
</body>

</html>