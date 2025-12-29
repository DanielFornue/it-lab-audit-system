<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Auditoría de Laboratorio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-dark text-white">
            <h3>📋 Checklist de Mantenimiento Preventivo</h3>
        </div>
        <div class="card-body">
            <form action="procesar_ticket.php" method="POST">
                
                <div class="mb-3">
                    <label class="form-label fw-bold">Número de Computadora:</label>
                    <input type="text" name="numero_pc" class="form-control" placeholder="Ej. PC-05" required>
                </div>

                <div class="row">
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Teclado:</label>
                        <select name="teclado" class="form-select">
                            <option value="Funciona">✅ Funciona</option>
                            <option value="Falla">❌ Falla / Teclas duras</option>
                            <option value="No tiene">⚠️ No tiene</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Mouse:</label>
                        <select name="mouse" class="form-select">
                            <option value="Funciona">✅ Funciona</option>
                            <option value="Falla">❌ Falla / Click roto</option>
                            <option value="No tiene">⚠️ No tiene</option>
                        </select>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label class="form-label">Pantalla:</label>
                        <select name="pantalla" class="form-select">
                            <option value="Funciona">✅ Funciona</option>
                            <option value="Falla">❌ Falla / Rayas</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">Estado de Internet:</label>
                    <select name="internet" class="form-select">
                        <option value="Conectado">🌐 Conectado</option>
                        <option value="Sin Red">🚫 Sin Red</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Observaciones Extra:</label>
                    <textarea name="observaciones" class="form-control" rows="2" placeholder="Ej. El botón de encendido se atora..."></textarea>
                </div>

                <button type="submit" class="btn btn-primary w-100">Guardar Revisión</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>