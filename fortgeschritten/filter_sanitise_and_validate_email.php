<?php 
$email = "benutzer@example.com";

// E-Mail bereinigen
$bereinigte_email = filter_var($email, FILTER_SANITIZE_EMAIL);

// E-Mail validieren
if(!filter_var($bereinigte_email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$bereinigte_email ist eine gültige E-Mail-Adresse");
} else {
    echo ("$bereinigte_email ist keine gültige E-Mail-Adresse");
}
?>