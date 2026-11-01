<?php 
// Variablen erstellen
$var1 = 28;
$var2 = 2;

// eine Funktion erstellen
function division() {
    
    // GLOBALS-Variable erstellen
    $GLOBALS['wert'] = $GLOBALS['var1'] / $GLOBALS['var2'];
}

// die Funktion aufrufen
division();

// von außerhalb der Funktion auf die Variable 'wert' zugreifen
echo $wert;
?>
