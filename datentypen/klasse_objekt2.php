<?php 

// eine Klasse erstellen
class Student {

    // Eigenschaften erstellen
    public $name;
    public $studiengang;

    // Konstruktor zur Initialisierung der Eigenschaften verwenden
    public function __construct($name, $studiengang) {
        $this->name = $name;
        $this->studiengang = $studiengang;
    }

    // eine Methode erstellen, um die Eigenschaften zu verwenden
    public function vorstellung() {
        return "Hallo, mein Name ist " . $this->name . ", und ich studiere im Fachbereich ". $this->studiengang . ".";
    }
}

// Objekt der Klasse erstellen, um die Eigenschaftswerte zu liefern
$objekt = new Student("Till Siskos", "Informationstechnik");

// das Objekt verwenden, um die Funktion vorstellung() oben aufzurufen
echo $objekt->vorstellung();

?>
