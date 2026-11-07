<?php 
// Funktion erstellen
function callback($artikel) {
    return strlen($artikel);
}

$artikel = ["stift", "lampe", "tastatur", "maus"];

// callback() als Argument in array_map() verwenden
$laengen = array_map("callback", $artikel);

print_r($laengen);
?>