<?php

class DBHandler {
    // Atributos para la conexión
    private $host = 'localhost';
    private $db_name = 'alicatadoweb';
    private $username = 'root';
    private $password = '';
    private $conn;

    // Método para conectarse a la base de datos
    public function connect() {
        $this->conn = null;

        try {
            $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
            // Establecer el modo de error de PDO para que lance excepciones
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $exception) {
            echo 'Error de conexión: ' . $exception->getMessage();
        }

        return $this->conn;
    }
}
?>
