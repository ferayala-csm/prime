<?php
$servername = "localhost";
$username = "root";
$password = ""; // Si no has establecido una contraseña, déjalo en blanco
$database = "prime";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa";
?>
