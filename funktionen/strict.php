<?php 

// die strict-Typisierung von PHP aktivieren
declare(strict_types=1);

// eine Funktion mit Argumenten erstellen
function zusammenzaehlen(int $a, $b) {
    return $a + $b;
}
// Funktionsaufruf
echo zusammenzaehlen(4, "1 holla"); // dies wirft einen (fatalen) Fehler, da PHP auf STRICT gesetzt wurde
echo  zusammenzaehlen(3, 4); // das funktioniert wie erwartet
?>
