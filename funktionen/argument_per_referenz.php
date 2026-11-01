<?php 
// strict-Typisierung aktivieren
declare(strict_types=1);

// Funktion mit Argument als Referenz mithilfe der &-Operation erstellen
function mein_alter(&$alter) {

    echo "Ich war " . $alter . " Jahre alt im Jahr 2017.";
    // das Alter initialisieren
    $alter += 5;
}

// irgendeine zufällige Zahl
$jahr = 23;

// Funktionsaufruf
mein_alter($jahr);


echo "Dann bin ich bis 2022 auf " . $jahr . " Jahre gewachsen.";
?>
