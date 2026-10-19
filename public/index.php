<?php
// Activo el modo estricto de tipos para que PHP sea más exigente con los datos
declare(strict_types=1);

# Cargo el archivo que contiene la función para leer mis datos
require_once __DIR__ . '/../lib/estudiante.php';

/* Fijo la zona horaria de Panamá para que la fecha
   y la hora salgan correctas y no en UTC */
date_default_timezone_set('America/Panama');

// Llamo a la función que lee estudiante.json y guardo mis datos en $est
$est = cargar_estudiante();

# Guardo la fecha y hora actual con el formato dd/mm/aaaa HH:mm
$ahora = date('d/m/Y H:i');
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <!-- El título se arma con PHP: "Lab 8 - " más mi apellido -->
    <title>Lab 8 - <?= htmlspecialchars($est['apellido']) ?></title>
</head>
<body>
    <?php
    /* Aquí imprimo el encabezado principal con mi nombre y apellido,
       que vienen del archivo estudiante.json */
    echo '<h1>' . htmlspecialchars($est['nombre'] . ' ' . $est['apellido']) . '</h1>';

    // Muestro la versión de PHP que está corriendo, usando print
    print '<p>Versión de PHP: ' . PHP_VERSION . '</p>';
    ?>

    <!-- Muestro la fecha y hora con la forma corta de echo -->
    <p>Fecha y hora actual: <?= $ahora ?></p>
</body>
</html>