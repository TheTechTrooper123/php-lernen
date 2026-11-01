<html>
    <body>
        <form action="<?php $_SERVER["PHP_SELF"]; /** Dadurch wird das Formular in derselben Datei verarbeitet */ ?>" method="post">
            Name: <input type="text" name="voller_name"> <br>
            Studiengang: <input type="text" name="studiengang"> <br>
            Alter: <input type="text" name="alter"> <br>
            <input type="submit">
        </form>

        <!-- PHP-Skript zum Verarbeiten des Formulars erstellen -->
        <?php 

            // prüfen, ob die Anfragemethode des Formulars POST ist
            if($_SERVER["REQUEST_METHOD"] == "POST") {

                // die Formularwerte holen und in Variablen speichern
                $name = $_REQUEST["voller_name"];
                $studiengang = $_REQUEST["studiengang"];
                $alter = $_REQUEST["alter"];

                // prüfen, ob das Formular leer ist: wenn leer, dem Benutzer mitteilen, dass es leer ist, sonst die Eingabe ausgeben
                if(empty($name && $studiengang && $alter)) {
                    echo "<p style='color: red;' >Ein oder mehrere Felder sind leer</p>";
                }
                else {
                    echo "Deine Informationen lauten wie folgt: <br>";
                    echo "Name: " . $name . "<br>";
                    echo "Studiengang: " . $studiengang . "<br>";
                    echo "Alter: " . $alter . "<br>";
                }
            }
        ?>
    </body>
</html>
