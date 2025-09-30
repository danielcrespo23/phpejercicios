<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EJ01</title>
</head>
<body>
<?php
$n1 = random_int(1, 10);
$n2 = random_int(1, 10);

echo "Numero 1: $n1 <br>";
echo "Numero 2: $n2 <br><hr>";

echo "$n1 + $n2 = " . ($n1 + $n2) . "<br>";
echo "$n1 - $n2 = " . ($n1 - $n2) . "<br>";

// Cálculo de la potencia
$resu = 1;
for ($i = 0; $i < $n2; $i++) {
    $resu = $resu * $n1;
}

echo "$n1 ** $n2 = " . $resu . "<br>";
?>
</body>
</html>
