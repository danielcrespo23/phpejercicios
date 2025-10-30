<?php
session_start();
require_once("funciones.php");

// Inicializar la sesión si es la primera vez
if (!isset($_SESSION['palabrasecreta'])) {
    $_SESSION['palabrasecreta'] = elegirPalabra();
    $_SESSION['letrasusuario'] = ""; // letras acertadas o probadas
    $_SESSION['fallos'] = 0;
}

$mensaje = "";
$palabrasecreta = $_SESSION['palabrasecreta'];

// Si el usuario envía una letra
if (isset($_GET['letra'])) {
    $letra = strtoupper($_GET['letra']);

    // Si aún no la había probado
    if (stripos($_SESSION['letrasusuario'], $letra) === false) {
        $_SESSION['letrasusuario'] .= $letra;

        // Comprobamos si la letra está en la palabra
        if (!comprobarLetra($letra, $palabrasecreta)) {
            $_SESSION['fallos']++;
            $mensaje = "❌ La letra '$letra' no está en la palabra.";
        } else {
            $mensaje = "✅ ¡Bien! La letra '$letra' está en la palabra.";
        }
    } else {
        $mensaje = "⚠️ Ya has probado la letra '$letra'.";
    }
}

// Generamos palabra con huecos
$palabramostrada = generaPalabraconHuecos($_SESSION['letrasusuario'], $palabrasecreta);

// Comprobamos si ha ganado
if ($palabramostrada == $palabrasecreta) {
    $mensaje = "🎉 ¡Has ganado! La palabra era '$palabrasecreta'.";
    session_destroy();
}

// Comprobamos si ha perdido
if ($_SESSION['fallos'] >= 6) {
    $mensaje = "💀 Has perdido. La palabra era '$palabrasecreta'.";
    session_destroy();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Juego del Ahorcado</title>
</head>
<body>
    <h1>🎯 Juego del Ahorcado</h1>

    <p>Palabra: <strong><?php echo $palabramostrada; ?></strong></p>
    <p>Letras probadas: <?php echo $_SESSION['letrasusuario']; ?></p>
    <p>Fallos: <?php echo $_SESSION['fallos']; ?> / 6</p>

    <form method="get">
        <label>Introduce una letra: </label>
        <input type="text" name="letra" maxlength="1" required autofocus>
        <button type="submit">Probar</button>
    </form>

    <p><?php echo $mensaje; ?></p>

    <form method="post" action="">
        <button type="submit" name="reiniciar">🔄 Reiniciar juego</button>
    </form>

    <?php
    // Si pulsa reiniciar
    if (isset($_POST['reiniciar'])) {
        session_destroy();
        header("Location: index.php");
    }
    ?>
</body>
</html>
