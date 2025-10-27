<?php
// pagosesion.php
// Gestión mediante SESIÓN

session_start();

// Si se recibe una nueva tarjeta, guardarla en la sesión y recargar la página
if (isset($_GET['nuevatarjeta'])) {
    $_SESSION['tarjeta'] = $_GET['nuevatarjeta'];
    header("Location: pagosesion.php");
    exit();
}

// Comprobamos si existe la variable de sesión
$tarjeta = $_SESSION['tarjeta'] ?? null;
?>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Forma de pago (Sesión)</title>
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

    <a href='pagosesion.php?nuevatarjeta=cashu'><img src='imagenes/cashu.gif' /></a>&ensp;
    <a href='pagosesion.php?nuevatarjeta=cirrus1'><img src='imagenes/cirrus1.gif' /></a>&ensp;
    <a href='pagosesion.php?nuevatarjeta=dinersclub'><img src='imagenes/dinersclub.gif' /></a>&ensp;
    <a href='pagosesion.php?nuevatarjeta=mastercard1'><img src='imagenes/mastercard1.gif' /></a>&ensp;
    <a href='pagosesion.php?nuevatarjeta=paypal'><img src='imagenes/paypal.gif' /></a>&ensp;
    <a href='pagosesion.php?nuevatarjeta=visa1'><img src='imagenes/visa1.gif' /></a>&ensp;
    <a href='pagosesion.php?nuevatarjeta=visa_electron'><img src='imagenes/visa_electron.gif' /></a>
</center>
</body>
</html>
