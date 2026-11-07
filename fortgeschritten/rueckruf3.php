<?php 
function ausruf($str) {
    return $str . "! ";
}

function frage($str) {
    return $str . "? ";
}

// callback in benutzerdefinierten Funktionen
function formatiert($str, $format) {

    // $format callback Funktion aufrufen
    echo $format($str);
}

formatiert("Hallo", "ausruf");
formatiert("Was meinst du", "frage");
?>