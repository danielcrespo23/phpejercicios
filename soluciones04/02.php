<?php 
// Crear página que simule un calculadora sencilla, mediante un único archivo 02.php 
// que mostrará un formularios con dos campos numéricos y 4 botones con los 4 tipos 
// de operaciones + - * /  posibles. Se incluirá también 3 controles de tipo radio que 
// indicarán como queremos que se muestre el resultado en decimal, binario o hexadecimal.
//
// El programa php debe comprobar que se han recibido los dos valores numéricos y 
// detectará el error de intento de división por cero. Mostrará el resultado calculado 
// según el formato elegido. Por omisión se mostrará en decimal.

// FUNCIONES AUXILIARES

function operar($val1, $val2, $operacion): float {
    switch ($operacion) {
        case '+':
            return $val1 + $val2;
        case '-':
            return $val1 - $val2;
        case '*':
            return $val1 * $val2;
        case '/':
            if ($val2 == 0) {
                throw new Exception("Error: División por cero");
            }
            return $val1 / $val2;
        default:
            throw new Exception("Operación no válida");
    }
}
function imprimirConFormato($formato, $valor) {
    switch ($formato) {
        case 'bin': 
            return decbin((int)$valor);
        case 'hex': 
            return strtoupper(dechex((int)$valor));
        default: return $valor; // decimal
    }
}

// VARIABLES
$resultado = "";
$error = "";

// PROCESAMIENTO DE DATOS
if (isset($_GET["operacion"])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $operacion = $_GET['operacion'];
    $formato = $_GET['formato'] ?? 'dec';

    if (is_numeric($num1) && is_numeric($num2)) {
        try {
            $resultado = imprimirConFormato($formato, operar($num1, $num2, $operacion));
        } catch (Exception $e) {
            $error = $e->getMessage();
        }
    } else {
        $error = "Por favor, introduce dos valores numéricos válidos.";
    }
}

// Muestra la vista
require_once("02vista.php");
