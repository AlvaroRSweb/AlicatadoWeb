<?php
include 'DBHandler.php'; // Asegúrate de que la ruta al archivo sea correcta

$db = new DBHandler();
$conn = $db->connect();


$sql = "SELECT id, nombre, descripcion, imagen, precio FROM productos";
$result = $conn->query($sql);

if ($result->rowCount() > 0) {
    while($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo '<div style="margin-bottom: 20px; border: 1px solid #ccc; padding: 10px;">'; // Estilo para separar los productos
        echo 'ID: ' . htmlspecialchars($row["id"]) . '<br>'; // Mostrar ID del producto
        echo 'Nombre: ' . htmlspecialchars($row["nombre"]) . '<br>'; // Mostrar nombre del producto
        echo 'Descripción: ' . htmlspecialchars($row["descripcion"]) . '<br>'; // Mostrar descripción
        echo 'Precio: $' . htmlspecialchars($row["precio"]) . '<br>'; // Mostrar precio
        
        // Mostrar la imagen BLOB
        if (!empty($row['imagen'])) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" style="width: 200px; height: auto;"><br>';
        }
        
        echo '</div>';
    }
} else {
    echo "0 resultados";
}

?>
