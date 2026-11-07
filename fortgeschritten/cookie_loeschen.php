<?php
$cookie_name = "benutzer";

// Cookie mit einem Ablaufdatum in der Vergangenheit löschen (z.B. vor einer Stunde)
setcookie($cookie_name, "", time() - 3600);
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        echo "Cookie '" . $cookie_name . "' wurde gelöscht";
        ?>
    </body>
</html>