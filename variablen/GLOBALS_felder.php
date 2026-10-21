<?php 

// globale Variablen definieren
$global_var1 = 2;
$global_var2 = 4;

// eine Funktion erstellen
function Funktion() {

    // das '$GLOBALS'-Feld verwenden, um auf die globalen Variablenwerte zuzugreifen und sie zu ändern
   $GLOBALS['global_var2'] = $GLOBALS['global_var1'] + $GLOBALS['global_var2'];
   
}

// Funktionsaufruf
Funktion();

// das Ergebnis ausgeben
echo $global_var2;

?>
