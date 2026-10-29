<?php
// mehrdimensionales Feld definieren
$array = array(
array("Person 1", "Männlich", 34),
array("Person 2", "Weiblich", 32),
array("Person 3", "Männlich", 30),
array("Person 4", "Männlich", 28),
);

// Feldelement auf dem Bildschirm ausgeben
echo "---Personeninfo---\r\n";
echo "1. name: " . $array[0][0] . " | geschlecht: " . $array[0][1] . " | alter: " . $array[0][2] . "\r\n";
echo "2. name: " . $array[1][0] . " | geschlecht: " . $array[1][1] . " | alter: " . $array[1][2] . "\r\n";
echo "3. name: " . $array[2][0] . " | geschlecht: " . $array[2][1] . " | alter: " . $array[2][2] . "\r\n";
echo "4. name: " . $array[3][0] . " | geschlecht: " . $array[3][1] . " | alter: " . $array[3][2] . "\r\n";

echo "\r\n";
echo "\r\n";

echo "-----verschachtelte for-Schleife zum Auslesen mehrdimensionaler Feldelemente";

echo "\r\n";
echo "\r\n";

// die Länge des Feldes ermitteln
$feld_laenge = count($array);

// erste for-Schleife
for($zeile = 0; $zeile < $feld_laenge; $zeile++) {
    
    // zweite for-Schleife
    for($spalte = 0; $spalte < $feld_laenge - 1; $spalte++) {

        echo $array[$zeile][$spalte] . "\r\n";
    }

    echo "\r\n";
}

?>
