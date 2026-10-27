<?php 

/**
 * echo hat keinen Rückgabewert, während print einen Rückgabewert von 1 hat
 * echo kann mehrere Parameter annehmen, während print nur ein Argument annimmt
 * echo ist geringfügig schneller als print
 */

 // echo verwenden, um Text anzuzeigen
 echo "<h2>Hallo PHP</h2>";
 echo "Ich springe in eine neue Zeile<br/>";
 echo "Dies ", "ist ", "ein ", "Beispiel ", "für ", "mehrere ", "Parameter ", "Anweisung.";

 // echo verwenden, um Variablen anzuzeigen
 $titel = "Aktualisierung";
 $name = "Till Siskos";
 $aussage = "wird bald PHP lernen von";
 $ort = "w3schools.com";

 $zahl1 = 10;
 $zahl2 = 0.5;

 echo "<h2>" . $titel . "</h2>";
 echo "<p>" . $name . " " . $aussage . " " . $ort . ".<br />";
 echo $zahl1 + $zahl2;
?>
