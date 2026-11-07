<?php 
// Entfernen aller HTML-Tags aus einem String

// String definieren
$html_string = "<h1>Hallo, ich entferne alle HTML-Tags aus diesem String.</h1>";
$gefilterter_html_string = filter_var($html_string, FILTER_SANITIZE_STRING);
echo $gefilterter_html_string;
?>