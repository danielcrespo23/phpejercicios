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

    // Si hay más de uno, devolvemos el primero
    return $masRepetidos[0];
}

// Crear array con 20 números aleatorios entre 1 y 10
$array = [];
for ($i = 0; $i < 20; $i++) {
    $array[] = rand(1, 10);
}

// Mostrar array en tabla de una fila
echo "<table border='1' cellpadding='5'><tr>";
foreach ($array as $num) {
    echo "<td>$num</td>";
}
echo "</tr></table><br>";

// Mostrar resultados
echo "Valor máximo: " . obtenerMaximo($array) . "<br>";
echo "Valor mínimo: " . obtenerMinimo($array) . "<br>";
echo "Valor más repetido: " . obtenerMasRepetido($array);
?>
