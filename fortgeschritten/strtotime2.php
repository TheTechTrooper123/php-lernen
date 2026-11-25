<?php 
$dt = strtotime("today");
echo "Heute ist: " . date("d.m.Y H:i:sa\r\n\r\n", $dt);

$dt = strtotime("tomorrow");
echo "Morgen ist: " . date("d.m.Y H:i:sa\r\n\r\n", $dt);

$dt = strtotime("next friday");
echo "Nächster Freitag ist: " . date("d.m.Y H:i:sa\r\n\r\n", $dt);

$dt = strtotime("+6 months");
echo "In 6 Monaten ist: " . date("d.m.Y H:i:sa\r\n\r\n", $dt);
?>