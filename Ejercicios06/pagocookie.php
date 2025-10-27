<?php
// pagocookie.php
// Gestión mediante COOKIE

// Tiempo de vida del cookie (por ejemplo, 30 días)
$tiempo_cookie = time() + (30 * 24 * 60 * 60);

// Si se recibe una nueva tarjeta, guardarla en el cookie y recargar la página
if (isset($_GET['nuevatarjeta'])) {
    $tarjeta = $_GET['nuevatarjeta'];
    setcookie("tarjeta", $tarjeta, $tiempo_cookie);
    header("Location: pagocookie.php");
    exit();
}

// Comprobamos si existe el cookie
$tarjeta = $_COOKIE['tarjeta'] ?? null;
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Forma de pago (Cookie)</title>
</head>
<body>
<center>
<?php if ($tarjeta): ?>
    <h2>SU FORMA DE PAGO ACTUAL ES</h2><br>
    <img src='imagenes/<?= htmlspecialchars($tarjeta) ?>.gif' /><br><br>
    <h2>SELECCIONE UNA NUEVA TARJETA DE CRÉDITO</h2><br>
<?php else: ?>
    <h2>SELECCIONE SU TARJETA DE CRÉDITO</h2><br>
<?php endif; ?>

    <a href='pagocookie.php?nuevatarjeta=cashu'><img src='imagenes/cashu.gif' /></a>&ensp;
    <a href='pagocookie.php?nuevatarjeta=cirrus1'><img src='imagenes/cirrus1.gif' /></a>&ensp;
    <a href='pagocookie.php?nuevatarjeta=dinersclub'><img src='imagenes/dinersclub.gif' /></a>&ensp;
    <a href='pagocookie.php?nuevatarjeta=mastercard1'><img src='imagenes/mastercard1.gif' /></a>&ensp;
    <a href='pagocookie.php?nuevatarjeta=paypal'><img src='imagenes/paypal.gif' /></a>&ensp;
    <a href='pagocookie.php?nuevatarjeta=visa1'><img src='imagenes/visa1.gif' /></a>&ensp;
    <a href='pagocookie.php?nuevatarjeta=visa_electron'><img src='imagenes/visa_electron.gif' /></a>
</center>
</body>
</html>
