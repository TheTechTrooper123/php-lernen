<?php 
$artikel = ["stift", "lampe", "tastatur", "maus"];

// Anonyme Funktion als callback verwenden
$laengen = array_map(
    function($artikel) {
        return strlen($artikel); 
    }, $artikel);

print_r($laengen);
?>