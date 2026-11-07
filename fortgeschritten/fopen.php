<?php 
// Datei öffnen oder sterben, wenn die Datei nicht existiert
$geoffnet = fopen("../dokument.txt", "r") or die("Datei kann nicht geöffnet werden oder existiert nicht");

echo fread($geoffnet, filesize("../dokument.txt"));

// Datei schließen
fclose($geoffnet);
?>