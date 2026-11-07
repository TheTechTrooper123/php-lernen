<?php 
$json = '{
    "name": "Till Siskos",
    "studiengang": "Informationstechnik",
    "cgpa": 4.0
}';

// JSON in PHP-Objekt dekodieren: Standardmäßig wird ein Objekt zurückgegeben, bei true als zweitem Parameter ein assoziatives Array
var_dump(json_decode($json, true));
?>