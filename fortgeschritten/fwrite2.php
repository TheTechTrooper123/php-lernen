<?php
$datei = fopen("../dokument3.txt", "a") or die("Datei kann nicht geöffnet oder beschrieben werden");

$anhang1 = "Person 1 hat Person 2 und Person 3 geboren\n";
fwrite($datei, $anhang1);

$anhang2 = "Person 4 hat Person 5 geboren\n";
fwrite($datei, $anhang2);

echo "  Datei erfolgreich aktualisiert";

fclose($datei);
?>