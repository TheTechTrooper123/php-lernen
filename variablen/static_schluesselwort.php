<?php 

// das Schlüsselwort static verwenden, um den Wert einer Variable nach der Funktionsausführung zu behalten
function Funktion(){
    static $var1 = 10;
    echo $var1 . '<br />';
    $var1++;
}

Funktion();
Funktion();
Funktion()
;?>
