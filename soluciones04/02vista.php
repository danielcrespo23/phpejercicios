<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link href="default.css" rel="stylesheet" type="text/css" />
<title>Mini Calculadora</title>
<script>
// Limpia los valores de los campos
function borrarvalores(){
    document.getElementsByName('num1')[0].value = "";
    document.getElementsByName('num2')[0].value = "";
}
</script>
</head>

<body>
<div id="container" style="width: 400px;">
    <div id="header">
        <h1>Mini Calculadora</h1>
    </div>

    <div id="content">
        <form method="get" action="02.php">
            Nº1:
            <input type="text" name="num1" size="10" value="<?= isset($num1)?htmlspecialchars($num1):'' ?>"> 
            <br>
            Nº2:
            <input type="text" name="num2" size="10" value="<?= isset($num2)?htmlspecialchars($num2):'' ?>">
            <br>

            <fieldset>
                <button name="operacion" value="+"> + </button>
                <button name="operacion" value="-"> - </button>
                <button name="operacion" value="*"> * </button>
                <button name="operacion" value="/"> / </button>
                <button type="button" onclick="borrarvalores()">Borrar</button>
            </fieldset>
            <br>

            <fieldset>
                <input type="radio" name="formato" value="dec" <?=(!isset($formato) || $formato=="dec")?"checked":""?>> Decimal
                <input type="radio" name="formato" value="bin" <?=(isset($formato) && $formato=="bin")?"checked":""?>> Binario
                <input type="radio" name="formato" value="hex" <?=(isset($formato) && $formato=="hex")?"checked":""?>> Hexadecimal
            </fieldset>

            <input type="reset" value="Borrar con reset">
        </form>

        <hr>
        <?php if (!empty($error)): ?>
            <p style="color:red;"><?= $error ?></p>
        <?php elseif (!empty($resultado)): ?>
            <h3>Resultado: <?= $resultado ?></h3>
        <?php endif; ?>
    </div>
</div>
</body>
</html>


