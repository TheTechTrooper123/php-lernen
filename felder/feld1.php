<?php 
// strict-Typisierung aktivieren
declare(strict_types=1);

// ein Feld definieren
$beispiel = array("test1", 2, 3, true, false, 2.35);

// einige Feldelemente ausgeben
echo nl2br($beispiel[0]);

// die Länge des Feldes ermitteln
echo count($beispiel);

?>
