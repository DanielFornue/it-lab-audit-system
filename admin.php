<?php include 'conexion.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Laboratorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container-fluid mt-4">
    <h2 class="text-center mb-4">Estado del Laboratorio de Cómputo 🖥️</h2>
    
    <div class="table-responsive">
        <table class="table table-bordered table-hover text-center bg-white shadow">
            <thead class="table-dark">
                <tr>
                    <th>PC #</th>
                    <th>Teclado</th>
                    <th>Mouse</th>
                    <th>Pantalla</th>
                    <th>Internet</th>
                    <th>Observaciones</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // 1. DEFINIMOS LA FUNCIÓN AQUÍ AFUERA (Solo una vez)
                function color($estado) {
                    if($estado == 'Falla' || $estado == 'No tiene' || $estado == 'Sin Red') {
                        return 'bg-danger text-white';
                    }
                    return 'bg-success text-white';
                }

                $sql = "SELECT * FROM auditoria_laboratorio ORDER BY id DESC";
                $resultado = $conn->query($sql);

                if ($resultado->num_rows > 0) {
                    // 2. EL CICLO SOLO SE ENCARGA DE USARLA
                    while($fila = $resultado->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td class='fw-bold'>" . $fila['numero_pc'] . "</td>";
                        
                        // Llamamos a la función que ya definimos arriba
                        echo "<td class='" . color($fila['teclado']) . "'>" . $fila['teclado'] . "</td>";
                        echo "<td class='" . color($fila['mouse']) . "'>" . $fila['mouse'] . "</td>";
                        echo "<td class='" . color($fila['pantalla']) . "'>" . $fila['pantalla'] . "</td>";
                        echo "<td class='" . color($fila['internet']) . "'>" . $fila['internet'] . "</td>";
                        
                        echo "<td class='text-start'>" . $fila['observaciones'] . "</td>";
                        echo "<td>" . $fila['fecha_revision'] . "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No hay registros aún.</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
    <div class="text-center mt-3">
        <a href="index.php" class="btn btn-primary">Nueva Revisión</a>
    </div>
</div>

</body>
</html>