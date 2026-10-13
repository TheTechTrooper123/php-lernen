<?php 

// globale Variablen definieren
$var1 = 10;
$var2 = 25;

// eine Funktion erstellen
function Funktion1(){

    // die globale Variable innerhalb dieser Funktion (lokal) mit dem Schlüsselwort 'global' referenzieren
    global $var1, $var2;
    $var2 = $var1 + $var2;
}

// die Funktion aufrufen
Funktion1();

// die neue var2 ausgeben
echo $var2;

?>
