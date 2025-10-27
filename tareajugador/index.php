<?php
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    include("captura.html");
    exit;
}

function limpiarDato($dato) {
    return htmlspecialchars(strip_tags(trim($dato)));
}

// Control de inyección
$nombre = limpiarDato($_POST['nombre']);
$alias = limpiarDato($_POST['alias']);
$edad = intval($_POST['edad']);
$armas = isset($_POST['armas']) ? $_POST['armas'] : [];
$magia = $_POST['magia'] ?? "No";


if (!is_dir($directorio)) mkdir($directorio, 0777, true);

$imagenMostrada = $calavera;

if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
    $archivoTmp = $_FILES['imagen']['tmp_name'];
    $nombreArchivo = basename($_FILES['imagen']['name']);
    $tipo = mime_content_type($archivoTmp);
    $tamaño = $_FILES['imagen']['size'];

    if ($tipo !== "image/png") {
        $mensajeError = "Error: solo se permiten imágenes PNG.";
    } elseif ($tamaño > 10240) {
        $mensajeError = "Error: la imagen supera los 10 KB.";
    } else {
        $rutaDestino = $directorio . $nombreArchivo;
        if (move_uploaded_file($archivoTmp, $rutaDestino)) {
            $imagenMostrada = $rutaDestino;
        } else {
            $mensajeError = "Error al subir la imagen.";
        }
    }
} elseif (!empty($_FILES['imagen']['name'])) {
    $mensajeError = "Error al subir la imagen.";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Jugador</title>
</head>
<body>
    <h2>Datos del Jugador</h2>

    <p><strong>Nombre:</strong> <?= $nombre ?></p>
    <p><strong>Alias:</strong> <?= $alias ?></p>
    <p><strong>Edad:</strong> <?= $edad ?></p>
    <p><strong>Armas seleccionadas:</strong> <?= implode(", ", $armas) ?></p>
    <p><strong>¿Practica artes mágicas?:</strong> <?= $magia ?></p>

    <p><strong>Imagen:</strong></p>
    <img src="<?= $imagenMostrada ?>" alt="Imagen del jugador" width="100"><br>
    <?php if ($mensajeError) echo "<p style='color:red;'>$mensajeError</p>"; ?>
</body>
</html>
