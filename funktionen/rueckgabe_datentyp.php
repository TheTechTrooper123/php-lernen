<?php 
// strict-Typisierung aktivieren
declare(strict_types=1);

// Funktion mit Argumenten erstellen und Rückgabedatentyp angeben
function multipliziere(float $x, $y, $z): float {
    return $x * $y * $z;
}

// Funktionsaufruf
echo multipliziere(2.2,3,4);
?>
