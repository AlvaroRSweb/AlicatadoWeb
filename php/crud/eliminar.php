<?php
include 'DBHandler.php'; // Asegúrate de que la ruta al archivo sea correcta

$db = new DBHandler();
$conn = $db->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $sql = "DELETE FROM contacto WHERE id=?";
    
    $stmt = $conn->prepare($sql);
    
    if ($stmt->execute([$id])) {
        echo "Registro eliminado con éxito.";
    } else {
        echo "Error al eliminar el registro.";
    }
}
?>
