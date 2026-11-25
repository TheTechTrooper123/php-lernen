<?php 
// Die nächsten 10 Freitage mit strtotime() anzeigen
$anfang_datum = strtotime("Friday");
$ende_datum = strtotime("+10 weeks", $anfang_datum);

while ($anfang_datum < $ende_datum) {
    echo date("M, d\r\n", $anfang_datum);
    $anfang_datum = strtotime("+1 week", $anfang_datum);
}
?>