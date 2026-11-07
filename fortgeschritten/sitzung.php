<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        // Sitzungsvariablen setzen
        $_SESSION["hautfarbe"] = "braun";
        $_SESSION["haarfarbe"] = "blau";

        echo "Sitzungsvariablen wurden gesetzt.";
        ?>
    </body>
</html>