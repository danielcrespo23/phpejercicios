<?php
// Array asociativo de periódicos
$periodicos = array(
    "El País" => "https://elpais.com",
    "El Mundo" => "https://www.elmundo.es",
    "ABC" => "https://www.abc.es",
    "La Vanguardia" => "https://www.lavanguardia.com",
    "El Periódico" => "https://www.elperiodico.com"
);

// Mostrar como lista <ul>
echo "<ul>";
foreach ($periodicos as $nombre => $url) {
    echo "<li><a href='$url' target='_blank'>$nombre</a></li>";
}
echo "</ul>";
?>

