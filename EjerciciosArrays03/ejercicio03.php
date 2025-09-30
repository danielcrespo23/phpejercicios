<?php
$periodicos = array(
    "El País" => "https://elpais.com",
    "El Mundo" => "https://www.elmundo.es",
    "ABC" => "https://www.abc.es",
    "La Vanguardia" => "https://www.lavanguardia.com",
    "El Periódico" => "https://www.elperiodico.com",
    "El MundoToday" => "https://www.elmundotoday.com"
);

$claveAleatoria = array_rand($periodicos); 

echo "<p>Medio seleccionado al azar: <a href='{$periodicos[$claveAleatoria]}' target='_blank'>$claveAleatoria</a></p>";
?>
