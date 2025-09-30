<?php
$periodicos = array(
    "El País" => "https://elpais.com",
    "El Mundo" => "https://www.elmundo.es",
    "ABC" => "https://www.abc.es",
    "La Vanguardia" => "https://www.lavanguardia.com",
    "El Periódico" => "https://www.elperiodico.com",
    "El MundoToday" => "https://www.elmundotoday.com"
);

// Elegir clave aleatoria
$claveAleatoria = array_rand($periodicos); // 👈 esta es la clave (nombre del periódico)

// Usamos la clave directamente
echo "<p>Medio seleccionado al azar: <a href='{$periodicos[$claveAleatoria]}' target='_blank'>$claveAleatoria</a></p>";
?>
