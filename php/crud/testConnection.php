<?php

require_once 'DBHandler.php';

// Crear una instancia de DBHandler
$dbHandler = new DBHandler();

// Intentar conectar a la base de datos
$conn = $dbHandler->connect();

if ($conn) {
    echo "¡Conexión exitosa!";
    // Intentar realizar una consulta simple (ajusta la consulta a tu base de datos)
    $query = "SELECT 1";
    $stmt = $conn->prepare($query);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        echo " La consulta se ejecutó correctamente.";
    } else {
        echo " Hubo un problema al ejecutar la consulta.";
    }
} else {
    echo "No se pudo conectar a la base de datos.";
}

?>

