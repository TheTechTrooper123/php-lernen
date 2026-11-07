<?php 
$arr1 = array(
    "name" => "Till Siskos",
    "studiengang" => "Informationstechnik",
    "cgpa" => 4.0
);

$arr2 = array("Till Siskos", "Informationstechnik", 4.0);


echo json_encode($arr1) . "\r\n";

// Indiziertes Array zu JSON-Array kodieren
echo json_encode($arr2) . "\r\n";
?>