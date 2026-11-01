<?php 

// eine Funktion mit zwei Argumenten erstellen
function multiplikation(int $a, int $b) {
    return $a * $b;
}

// die Funktion mit Ganzzahlen und einer Zeichenkette aufrufen
echo multiplikation(10, "2 Tage");

// Hinweis: Dieser Code wirft in PHP 8.1 einen Typfehler
// PHP 7.4 läuft, gibt aber einen Hinweis auf einen nicht wohlgeformten numerischen Wert aus
?>
