<?php 
$url = "http://php.test/fortgeschritten/hochladen.php";

// URL bereinigen
$bereinigte_url = filter_var($url, FILTER_SANITIZE_URL);

// URL validieren
if(!filter_var($bereinigte_url, FILTER_VALIDATE_URL) === false) {
    echo("$bereinigte_url ist eine gültige URL");
} else {
    echo ("$bereinigte_url ist keine gültige URL");
}
?>