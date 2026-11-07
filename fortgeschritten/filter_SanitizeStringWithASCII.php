<?php
$str = "<h1>Hallo WeltÆØÅ!</h1>";

// filter_var() Funktion zum Bereinigen eines Strings. Entfernt sowohl alle HTML-Tags als auch alle Zeichen mit ASCII-Wert > 127 aus dem String:
$neuer_str = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
echo $neuer_str;
?>
