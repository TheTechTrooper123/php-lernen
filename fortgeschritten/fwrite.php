<?php
$datei = fopen("../dokument3.txt", "w") or die("Datei kann nicht erstellt/geöffnet werden");

$inhalt1 = "Person 1\n";
fwrite($datei, $inhalt1);

$inhalt2 = "Person 2\n";
fwrite($datei, $inhalt2);

$inhalt3 = "Person 3\n";
fwrite($datei, $inhalt3);

$inhalt4 = "Person 4\n";
fwrite($datei, $inhalt4);

echo "Datei erfolgreich erstellt und beschrieben!\n";

fclose($datei);
?>