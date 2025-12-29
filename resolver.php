<?php
include 'conexion.php';


$id_ticket = $_GET['id'];


$sql = "UPDATE tickets SET estatus = 'Resuelto' WHERE id = $id_ticket";


if ($conn->query($sql) === TRUE) {
    
    header("Location: admin.php");
} else {
    echo "Error actualizando: " . $conn->error;
}

$conn->close();
?>