<?php
include 'DBHandler.php'; // Asegúrate de que la ruta al archivo sea correcta

// Conexión a la base de datos
$db = new DBHandler();
$conn = $db->connect();

// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    // Preparar la consulta SQL
    $sql = "INSERT INTO contacto (email, nombre, asunto, mensaje) VALUES (?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    
    // Ejecutar la consulta
    if ($stmt->execute([$email, $nombre, $asunto, $mensaje])) {
        // Usar JavaScript para mostrar un mensaje y redireccionar
            echo "<script>
            alert('Datos guardados correctamente.');
            window.location.href = 'http://localhost/dise%c3%b1o%20web/html/#';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>