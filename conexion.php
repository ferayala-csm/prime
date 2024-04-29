<?php
$servername = "localhost";
$username = "root";
$password = ""; // Deja el campo de contraseña vacío si no la cambiaste
$database = "prime";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión y muestra un mensaje
if ($conn->connect_error) {
    echo "Conexión fallida: " . $conn->connect_error;
} else {
    echo "Conexión exitosa";
}
?>

