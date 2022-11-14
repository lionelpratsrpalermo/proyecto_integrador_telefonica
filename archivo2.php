<?php

// Inicio el manejo de sesiones.
session_start();

// Puedo usar cualquier elemento del arreglo

$numeros = array('uno', 'dos', 'tres');
$_SESSION['numeros'] = $numeros;
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
