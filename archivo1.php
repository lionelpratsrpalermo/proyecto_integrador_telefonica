<?php
// Iniciamos el manejo de sesiones
session_start();

// Creamos una variable y le asignamos un valor
$_SESSION['nombre'] = 'Lionel';

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
