<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contactos_bd";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
?>
