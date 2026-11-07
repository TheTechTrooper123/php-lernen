<?php 
$ip = "127.0.0.1";

if(!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip ist eine gültige IP-Adresse");
} else {
    echo("$ip ist keine gültige IP-Adresse");
} 
?>