<?php
$servername = "db";
$username = "root";
$password = "example";
$dbname = "miapp";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
