<?php 
$json = '{
    "name": "Till Siskos",
    "studiengang": "Informationstechnik",
    "cgpa": 4.0
}';

$objekt = json_decode($json);

// Dekodierte Werte aus PHP-Objekt abrufen
echo "Aus PHP-Objekt: " . $objekt->cgpa . "\r\n";

// Durch die Werte eines PHP-Objekts iterieren:
foreach ($objekt as $obj_schluessel => $obj_wert) {
    echo  "Durchlauf aus PHP-Objekt: " . $obj_schluessel . ": " . $obj_wert . "\r\n";
}


$array = json_decode($json, true);

// Dekodierte Werte aus assoziativem PHP-Array abrufen
echo "Aus assoziativem PHP-Array: " . $array["name"] . "\r\n";

// Durch die Werte eines assoziativen PHP-Arrays iterieren:
foreach ($array as $arr_schluessel => $arr_wert) {
    echo "Durchlauf aus assoziativem PHP-Array: " .  $arr_schluessel . ": " . $arr_wert . "\r\n";
}
?>