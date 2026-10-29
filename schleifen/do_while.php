<?php 

// Zähler initialisieren
$nummer = 3;

// do-Block, um einen Codeblock mindestens einmal auszuführen
do {
    echo "Ich bin Nummer " . $nummer . "<br />";

    // Zähler erhöhen
    $nummer++;
}

// while-Schleife, um die Bedingung zu prüfen
while($nummer <= 10);

?>
