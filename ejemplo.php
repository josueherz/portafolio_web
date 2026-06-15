<?php 
?><!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Conexión a MySQL</title>

</head>
<body>
    <h1>Ejemplo de Conexión a MySQL</h1>
    <?php
    // Incluir el archivo de conexión
    include 'conexion.php';

    // Verificar la conexión
    if ($conexion->connect_error) {
        die('Error de conexión: ' . $conexion->connect_error);
    } else {
        echo 'Conexión exitosa a la base de datos.';
    }

    // Cerrar la conexión
    $conexion->close();
    ?>
</body>
</html>
