<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numero = rand(1, 9);

echo "<p><strong>Número generado: $numero</strong></p>";

for ($i = 1; $i <= $numero; $i++) {
    $linea = str_repeat((string)$i, $i);

    if ($i % 2 == 1) {
        echo "<span style='color:red;'>$linea</span><br>";
    } else {
        echo "<span style='color:blue;'>$linea</span><br>";
    }
}
?>
</body>
</html>
