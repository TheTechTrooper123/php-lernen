<?php
$ziel_verzeichnis = "./hochgeladen/";
$ziel_datei = $ziel_verzeichnis . basename($_FILES["meine_datei"]["name"]);
$hochladen_ok = 1;
$dateityp = strtolower(pathinfo($ziel_datei, PATHINFO_EXTENSION));

// Prüfen, ob die Datei ein echtes oder gefälschtes Bild ist
if(isset($_POST["submit"])) {
    $pruef_datei = getimagesize(($_FILES["meine_datei"]["tmp_name"]));
    if($pruef_datei != false) {
        echo "Die Datei ist ein echtes Bild - " . $pruef_datei["mime"] . ".<br><br>";
        $hochladen_ok = 1;
    } else {
        echo "Die Datei ist kein Bild. <br><br>";
        $hochladen_ok = 0;
    }
}

// Prüfen, ob die Datei bereits im Upload-Verzeichnis existiert
if (file_exists(($ziel_datei))) {
    echo "Ups..., die Datei existiert bereits <br><br>";
    $hochladen_ok = 0;
}

// Prüfen, ob die Dateigröße größer als 500 KB ist
if($_FILES["meine_datei"]["size"] > 500000) {
    echo "Ups..., die ausgewählte Datei ist zu groß. <br><br>";
    $hochladen_ok = 0;
}

// Einschränkung des Dateityps/formats, das hochgeladen werden kann
if($dateityp != "jpg" && $dateityp != "png" && $dateityp != "jpeg" && $dateityp != "gif") {
    echo "Ups..., Sie können nur PNG-, JPG-, JPEG- und GIF-Dateien hochladen. <br><br>";
    $hochladen_ok = 0;
}

// Prüfen, ob $hochladen_ok aufgrund eines Fehlers auf 0 gesetzt wurde
if ($hochladen_ok == 0) {
    echo "Ups..., Ihr Datei-Upload war nicht erfolgreich. <br><br>";
} else {
    if (move_uploaded_file($_FILES["meine_datei"]["tmp_name"], $ziel_datei)) {
        echo "Ihre Datei " . htmlspecialchars(basename($_FILES["meine_datei"]["name"])) . " wurde erfolgreich hochgeladen. <br><br>";
    } else {
        echo "Ups..., beim Hochladen Ihrer Datei ist ein Fehler aufgetreten. <br><br>";
    }
}
?>