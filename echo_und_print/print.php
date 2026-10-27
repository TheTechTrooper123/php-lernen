<?php 

/**
 * echo hat keinen Rückgabewert, während print einen Rückgabewert von 1 hat
 * echo kann mehrere Parameter annehmen, während print nur ein Argument annimmt
 * echo ist geringfügig schneller als print
 */

 // print verwenden, um Text anzuzeigen
 print "<h2>Ich wiederhole gerade meine PHP-Kenntnisse.</h2>";
 print "Hallo Amigo! <br />";
 print "Ich stehe kurz davor, ein Senior-Entwickler zu werden";

 // php verwenden, um Variablen anzuzeigen
 $titel = "Aktualisierung";
 $name = "Till Siskos";
 $aussage = "wird bald PHP lernen von";
 $ort = "w3schools.com";

 $zahl1 = 10;
 $zahl2 = 0.5;

 print "<h3>" . $ort . "</h2>";
 print "Das ist, wo " . $name . " PHP lernt. <br />";
 print $zahl1 - $zahl2;

 ?>
