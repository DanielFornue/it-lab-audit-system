<?php
include 'conexion.php';


$pc = $_POST['numero_pc'];
$teclado = $_POST['teclado'];
$mouse = $_POST['mouse'];
$pantalla = $_POST['pantalla'];
$internet = $_POST['internet'];
$obs = $_POST['observaciones'];


$sql = "INSERT INTO auditoria_laboratorio (numero_pc, teclado, mouse, pantalla, internet, observaciones) 
        VALUES ('$pc', '$teclado', '$mouse', '$pantalla', '$internet', '$obs')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>✅ Revisión Guardada</h1>";
    echo "<p>La PC <b>$pc</b> ha sido registrada.</p>";
    echo "<a href='index.php'>Auditar otra PC</a> | <a href='admin.php'>Ver Reporte General</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>