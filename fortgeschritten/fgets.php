<?php 
$datei = fopen("../dokument.txt", "r") or die("Datei kann nicht geöffnet werden"); 
echo fgets($datei);
fclose($datei);
?>
