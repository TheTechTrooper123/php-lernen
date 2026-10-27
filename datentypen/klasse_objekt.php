<?php 
// eine Klasse erstellen
class Name {

    // Eigenschaften deklarieren
    public $vorname;
    public $nachname;

    // Konstruktor erstellen, um die Eigenschaften zu initialisieren
    public function __construct($vorname, $nachname) {
        $this->vorname = $vorname;
        $this->nachname  = $nachname;
    }

    // Funktion erstellen, um die Eigenschaften zu verwenden
    public function vorstellung(){
        return "Mein Name ist " . $this->vorname . " " . $this->nachname;
    }
}

// ein Objekt erstellen, um Werte für die Eigenschaften zu liefern
$objekt = new Name("Till", "Siskos");

// das Objekt verwenden, um die Methode aufzurufen 
echo $objekt->vorstellung();
?>
