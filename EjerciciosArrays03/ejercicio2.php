<?php
$periodicos = array(
    "El País" => "https://elpais.com",
    "El Mundo" => "https://www.elmundo.es",
    "ABC" => "https://www.abc.es",
    "La Vanguardia" => "https://www.lavanguardia.com",
    "El Periódico" => "https://www.elperiodico.com"
);

echo "<ul>";
foreach ($periodicos as $nombre => $url) {
    echo "<li><a href='$url' target='_blank'>$nombre</a></li>";
}
echo "</ul>";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de periódicos</title>
</head>
<body>
    <h2>Periódicos</h2>
    <ul>
        <?php foreach ($periodicos as $nombre => $url): ?>
            <li><a href="<?= $url ?>" target="_blank"><?= $nombre ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

