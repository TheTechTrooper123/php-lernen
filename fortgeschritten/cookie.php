<?php
$cookie_name = "benutzer";
$cookie_wert = "Unbekannter Benutzer";

// Cookie setzen, der in 30 Tagen abläuft und in allen Web-Verzeichnissen verfügbar ist
setcookie($cookie_name, $cookie_wert, time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Das Cookie '" . $cookie_name . "' ist nicht gesetzt";
        } else {
            echo "Das Cookie '" . $cookie_name . "' ist gesetzt. <br>";
            echo "Der Wert des Cookies ist: " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>