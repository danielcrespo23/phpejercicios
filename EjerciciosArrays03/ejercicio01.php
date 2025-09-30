<?php
// Función para obtener el valor máximo
function obtenerMaximo($array) {
    return max($array);
}

// Función para obtener el valor mínimo
function obtenerMinimo($array) {
    return min($array);
}

// Función para obtener el valor más repetido
function obtenerMasRepetido($array) {
    $frecuencias = array_count_values($array);
    $maxRepeticiones = max($frecuencias);
    $masRepetidos = array_keys($frecuencias, $maxRepeticiones);
    return $masRepetidos[0]; // devolvemos el primero si hay empate
}

// Crear array con 20 números aleatorios entre 1 y 10
$array = [];
for ($i = 0; $i < 20; $i++) {
    $array[] = rand(1, 10);
}

// Calcular resultados
$maximo = obtenerMaximo($array);
$minimo = obtenerMinimo($array);
$masRepetido = obtenerMasRepetido($array);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Array de números aleatorios</title>
</head>
<body>
    <h2>Tabla con 20 números aleatorios</h2>
    <table border="1" cellpadding="5">
        <tr>
            <?php foreach ($array as $num): ?>
                <td><?= $num ?></td>
            <?php endforeach; ?>
        </tr>
    </table>

    <h3>Resultados</h3>
    <p>Valor máximo: <?= $maximo ?></p>
    <p>Valor mínimo: <?= $minimo ?></p>
    <p>Valor más repetido: <?= $masRepetido ?></p>
</body>
</html>
