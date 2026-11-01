<?php 

// strict-Typisierung aktivieren
declare(strict_types=1);

// Funktion mit Argument erstellen
function information(string $vorname) {
    echo $vorname . " Siskos ist " . $alter . " Jahre alt.";
} 

// Funktion mit Standardargument erstellen
function Hoehe(int $groesse = 6) {
    echo "Er ist " . $groesse . " Zoll groß.";
}

// Funktionsaufruf
information(30, "Person 1");
Hoehe();
?>

