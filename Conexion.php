<?php
$servidor = "localhost";
$usuario = "root";
$password = ""; 
$base_datos = "soporte_t";


$conn = new mysqli($servidor, $usuario, $password, $base_datos);


if ($conn->connect_error) {
    die("Falló la conexión: " . $conn->connect_error);
}
?>