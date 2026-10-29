<?php 

$name = "Till Beispiel Siskos";

// die Anzahl der Zeichen zählen
echo strlen($name);
echo "<br />";

// die Anzahl der Wörter in einer Zeichenkette zählen
echo str_word_count($name);
echo "<br />";

// die Zeichenkette umkehren
echo strrev($name);
echo "<br />";

// in $name nach Siskos suchen
echo strpos($name, "Siskos");
echo "<br />";

// "Beispiel" durch "Exempel" in $name ersetzen
echo str_replace("Beispiel", "Exempel", $name);
echo "<br />";

?>
