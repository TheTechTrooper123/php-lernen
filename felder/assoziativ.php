<?php
// assoziatives Feld definieren
$array = array("name"=>"Till Siskos", "alter"=>28, "studiengang"=>"IT");

// Feldelemente ausgeben
echo "Mein Name ist " . $array["name"];
echo "\r\n";
echo "Ich bin " . $array["alter"] . " Jahre alt";
echo "\r\n";
echo "Ich studiere derzeit " . $array["studiengang"];

echo "\r\n";
echo "\r\n";
// mit der foreach-Schleife durch das assoziative Feld iterieren
echo "-----mit der foreach-Schleife durch das assoziative Feld iterieren-----\r\n";

foreach ($array as $schluessel => $wert) {
    echo "Schlüssel:  " . $schluessel . " |  Wert: " . $wert;
    echo "\r\n";
}
?>
