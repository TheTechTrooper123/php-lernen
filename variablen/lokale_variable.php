<?php 

// eine Funktion erstellen
function Variable(){
    
    // eine lokale Variable definieren
    $var = 20;

    // der Zugriff auf die lokale Variable innerhalb der Funktion funktioniert korrekt
    echo "Ich bin eine lokale Variable, und mein Wert ist: " . $var;
}

// die Funktion aufrufen
Variable();

// der Zugriff auf die Variable außerhalb ihres Gültigkeitsbereichs verursacht einen Fehler für eine undefinierte Variable
echo $var;


?>
