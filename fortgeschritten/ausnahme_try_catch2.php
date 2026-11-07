<?php 
function voller_name($vorname, $nachname) {
    if ($vorname != "Till") {
        throw new Exception("Dies ist nicht die richtige Person");
    } else {
        return $vorname . " " . $nachname;
    }
}

try {
    echo voller_name("Person 9", "Siskos");
} catch (Exception $ex) {
    $code = $ex->getCode();
    $nachricht = $ex->getMessage();
    $datei = $ex->getFile();
    $zeile = $ex->getLine();
    echo "Ausnahme ausgelöst in $datei in Zeile $zeile: [Code $code]
    $nachricht";
}
?>