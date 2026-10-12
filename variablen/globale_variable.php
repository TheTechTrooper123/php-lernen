<?php 

// eine globale Variable deklarieren (Variable außerhalb einer Funktion)
$var = 20;

// eine Funktion definieren
function Variable(){
    
    // der Versuch, innerhalb der Funktion auf die globale Variable zuzugreifen, löst einen Fehler für eine undefinierte Variable aus
    echo $var;
}

// die Funktion aufrufen
Variable();

// der Zugriff auf die Variable außerhalb der Funktion (im globalen Bereich) funktioniert korrekt
echo "Variablenwert = " . $var . ": Ich wurde aus einem globalen Bereich aufgerufen";

?>
