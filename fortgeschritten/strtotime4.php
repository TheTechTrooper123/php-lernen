<?php 
// Anzahl der Tage bis zu meinem Geburtstag berechnen
$heutiger_tag = strtotime("April 28");
$tage_bis_geburtstag = ceil(($heutiger_tag - time()) / 60 / 60 / 24);
echo "Es sind noch " . $tage_bis_geburtstag . " Tage bis zu meinem Geburtstag.\r\n";
?>