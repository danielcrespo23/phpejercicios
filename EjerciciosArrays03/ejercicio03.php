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
$medio = $claveAleatoria;
$url = $periodicos[$medio];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Medio al azar</title>
</head>
<body>
    <h2>Medio seleccionado al azar</h2>
    <p><a href="<?= $url ?>" target="_blank"><?= $medio ?></a></p>
</body>
</html>
