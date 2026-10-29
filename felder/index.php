<?php 
// indiziertes Feld definieren
$array = array("test1", 2, 3, 2.35);

// die Länge des Feldes ermitteln
$feld_laenge = count($array);

// mit der for-Schleife durch die Feldelemente iterieren
for($element = 0; $element < $feld_laenge; $element++) {
    echo $array[$element];

    // jedes Feldelement in einer neuen Zeile ausgeben
    echo "<br>"; 
}
?>
