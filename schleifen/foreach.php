<?php 

// Feld definieren
$studenten = array('Person 1' => 'Informationstechnik', 'Person 2' => 'Statistik', 'Person 3' => 'Informatik');

// foreach-Schleife, um durch das Feld zu iterieren
foreach($studenten as $schluessel => $wert) {
    // echo $schluessel . "<br />"; // // nur Schlüssel ausgeben
    //  echo $wert . "<br />"; // // nur Werte ausgeben
    echo "$schluessel: $wert <br />"; // // Schlüssel und Werte ausgeben

}

?>
