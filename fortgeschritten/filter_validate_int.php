<?php 
$wert = 0;

// Prüfen, ob der Wert eine Ganzzahl ist
if (!filter_var($wert, FILTER_VALIDATE_INT) === 0 || !filter_var($wert, FILTER_VALIDATE_INT) === false) {
    echo("$wert ist eine gültige Ganzzahl");
} else {
    echo("$wert ist keine gültige Ganzzahl\n");
    echo $wert . " ist vom Typ " . gettype($wert) . "\n";
}
?>