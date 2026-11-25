<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        session_unset();
        session_destroy();

        echo "Sitzung wurde beendet!";
        ?>
    </body>
</html>