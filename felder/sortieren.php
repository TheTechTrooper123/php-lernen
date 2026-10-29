<?php 
// ein indiziertes Feld definieren
$index_array = array(2, "junge", 4, "mädchen", 1, "jung", 5, "alt");

// Feldlänge
$ind_feld_laenge = count($index_array);

// aufsteigend sortieren
echo "-----Feld aufsteigend sortieren -----\r\n";
sort($index_array);
for($wert = 0; $wert < $ind_feld_laenge; $wert++) {
    echo $index_array[$wert] . "\r\n";
}

// absteigend sortieren
echo "-----Feld absteigend sortieren -----\r\n";
rsort($index_array);
for($wert = 0; $wert < $ind_feld_laenge; $wert++) {
    echo $index_array[$wert] . "\r\n";
}

echo "\r\n";
echo "\r\n";

// assoziatives Feld definieren
$asso_array = array("junge" => 2, "mädchen" => 4, "jung" => 1, "alt" => 5);

// das Feld absteigend nach Werten sortieren
arsort($asso_array);

echo "----Feld absteigend nach Werten sortieren------";
foreach($asso_array as $schluessel => $wert) {
    echo "\r\n"; echo "\r\n";
    echo  "Schlüssel: " . $schluessel . " | " . "Wert: " . $wert . "\r\n";
}

echo "\r\n"; echo "\r\n";

// das Feld absteigend nach Schlüsseln sortieren
krsort($asso_array);
echo "----Feld absteigend nach Schlüsseln sortieren------";
foreach ($asso_array as $schluessel2 => $wert2) {
    echo "\r\n"; echo "\r\n";
    echo  "Schlüssel: " . $schluessel2 . " | " . "Wert: " . $wert2 . "\r\n";
}
?>
