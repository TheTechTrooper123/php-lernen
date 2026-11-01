<?php 
// gibt das aktuelle Dateiverzeichnis aus (plus: den Dateinamen)
echo $_SERVER['PHP_SELF']; 
echo "<br>";

// gibt den Server-Host aus
echo $_SERVER['SERVER_NAME'];
echo "<br>";

// gibt den Server-Host aus
echo $_SERVER['HTTP_HOST'];
echo "<br>";

// gibt die vollständige URL der aktuellen Seite aus (ohne den Dateinamen)
echo $_SERVER['HTTP_REFERER'];
echo "<br>";

// gibt Informationen über die verwendete Maschine aus
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

// gibt das Verzeichnis der aktuellen Seite aus
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";

// gibt das CGI des Servers aus
echo $_SERVER['GATEWAY_INTERFACE'];
echo "<br>";

// gibt die IP des Servers aus
echo $_SERVER['SERVER_ADDR'];
echo "<br>";

// gibt die Server-ID-Zeichenkette aus
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";

// gibt die Remote-Adresse des Seitenbetrachters aus
echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

// gibt den Server-Port aus
echo $_SERVER['SERVER_PORT'];
echo "<br>";

// gibt die Serverversion und den virtuellen Hostnamen aus
echo $_SERVER['SERVER_SIGNATURE'];
echo "<br>";

// gibt die URI DER AKTUELLEN SEITE aus
echo $_SERVER['SCRIPT_URI'];
echo "<br>";
?>
