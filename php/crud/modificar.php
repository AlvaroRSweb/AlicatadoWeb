<?php
include 'DBHandler.php'; // Asegúrate de que la ruta al archivo sea correcta

$db = new DBHandler();
$conn = $db->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $nombre = $_POST['nombre'];
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    $sql = "UPDATE contacto SET email=?, nombre=?, asunto=?, mensaje=? WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt->execute([$email, $nombre, $asunto, $mensaje, $id])) {
        echo "Registro actualizado con éxito.";
    } else {
        echo "Error al actualizar el registro.";
    }
}
?>
