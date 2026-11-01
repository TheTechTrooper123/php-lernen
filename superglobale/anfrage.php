<html>
    <body>
        <!-- ein Formular erstellen und die Verarbeitung im selben Formular durchführen lassen -->
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            Name: <input type="text" name="name">
            <input type="submit">
        </form>

        <!-- PHP-Datei zum Verarbeiten des Formulars: Daten beim Absenden sammeln -->
        <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST") {
          
            // Variable name definieren, um die übermittelten Daten zu halten
            $name = $_REQUEST["name"];

            // etwas ausgeben, wenn das Formular leer ist
            if(empty($name)) {
                echo "Name ist leer";
            }
            else {
                echo "Dein Name ist: " . $name;
            }
        }
        ?>
    </body>
</html>
