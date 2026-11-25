<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php 
        // zuvor gesetzte Sitzungsvariablen ausgeben
        echo "Hautfarbe ist " . $_SESSION["hautfarbe"] . "<br>";
        echo "Haarfarbe ist " . $_SESSION["haarfarbe"] . "<br>";

        // Eine weitere Möglichkeit, alle Sitzungsvariablen abzurufen:
        print_r($_SESSION);
        ?>
    </body>
</html>