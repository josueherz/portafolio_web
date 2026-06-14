<?php
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$basedatos = 'prueba';

$conexion = new mysqli($host, $usuario, $contrasena, $basedatos);

if ($conexion->connect_error) {
    die('Error de conexión: ' . $conexion->connect_error);
}

// Opcional: establecer el juego de caracteres
$conexion->set_charset('utf8');
?>