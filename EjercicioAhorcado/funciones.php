<?php
function elegirPalabra() {
    // Array de palabras
    static $tpalabras = ["Madrid", "Sevilla", "Murcia", "Málaga", "Mallorca", "Menorca"];
    
    // Devuelve una palabra al azar
    $indice = array_rand($tpalabras);
    return $tpalabras[$indice];
}

function comprobarLetra($letra, $cadena) {
    // Devuelve true o false si la letra está en la cadena
    return stripos($cadena, $letra) !== false; // stripos ignora mayúsculas/minúsculas
}

function generaPalabraconHuecos($cadenaletras, $cadenapalabra) {
    $resu = "";

    for ($i = 0; $i < strlen($cadenapalabra); $i++) {
        $letra = $cadenapalabra[$i];
        
        // Si la letra (ignorando mayúsculas) está entre las letras del usuario
        if (stripos($cadenaletras, $letra) !== false) {
            $resu .= $letra;
        } else {
            // Espacios se mantienen
            $resu .= ($letra == " ") ? " " : "-";
        }
    }

    return $resu;
}
?>

