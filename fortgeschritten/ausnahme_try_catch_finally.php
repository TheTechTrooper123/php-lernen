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
} 
catch (Exception $e) {
    echo "Voller Name konnte nicht ausgegeben werden \n";
}
finally{
    echo "Prozess beendet";
}
?>