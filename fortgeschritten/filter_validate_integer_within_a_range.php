<?php 
$wert = 200;

$minimum = 1;
$maximum = 200;

// Prüfen, ob $wert eine Ganzzahl ist und zwischen 1 und 200 liegt
if(filter_var($wert, FILTER_VALIDATE_INT, array("options" => 
array("min_range" => $minimum, "max_range" => $maximum))) === false) {
    echo("$wert liegt nicht im zulässigen Bereich");
} else {
    echo("$wert liegt im zulässigen Bereich");
}
?>