<?php
$datei = fopen("../dokument.txt", "r") or die("Datei kann nicht geöffnet werden");

while (!feof($datei)) {
    echo fgets($datei) . "<br>";
}
fclose($datei);
?>